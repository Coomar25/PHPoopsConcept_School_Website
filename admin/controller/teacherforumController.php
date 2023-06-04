<?php
include 'model/dbmodule.php';
$obj = new Database();


// Call the renderForm() method to generate a new token value and store it in the session
$validator = new formCSRFvalidation();

// This will prevent the warning from appearing if the session has already been started.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class formCSRFvalidation
{
    public function renderForm()
    {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $token;
        // Your view code here
    }

    public function submitForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // check if the submitted token matches with the one stored in session
            if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
                // process submitted data
            } else {
                // show error
            }

            // After processing the submitted data and everything has gone well,
            // regenerate a new token:
            $token = bin2hex(random_bytes(32));
            $_SESSION['csrf_token'] = $token;
        }
    }


}



// ====================================================================================================================
// ========================TO check database has been connected or not================================================= 
// ====================================================================================================================

// // $table, $rows="*", $join = null, $where =null, $order=null, $limit=null
// // Attempt to retrieve data from the database
// $data = $obj->select('student_achievment', '*', null, null, null, null);

// // Check if data is returned
// if (!empty($data)) {
//     // If data is returned, the database connection is established properly
//     echo 'Database connection established successfully';
// } else {
//     // If no data is returned, there is an issue with the database connection
//     echo 'Failed to establish database connection';
// }
// =================================================================================================================
// =================================================================================================================
// =================================================================================================================

// Check if the submitted token matches with the one stored in session
$validator->renderForm();


if (!empty($_POST)) {
    $validator->submitForm();
    // Get form data 
    $tname = filter_input(INPUT_POST, "tname", FILTER_SANITIZE_STRING);
    $timage = $image = $_FILES['timage'];
    $timage = $_FILES['timage']['name']; // Retrieves the name of the uploaded file
    $temp_file = $_FILES['timage']['tmp_name']; // Retrieves the temporary location of the uploaded file
    $tpost = filter_input(INPUT_POST, "tpost", FILTER_SANITIZE_STRING);
    $tquote = filter_input(INPUT_POST, "tquote", FILTER_SANITIZE_STRING);
    $tvalue = filter_input(INPUT_POST, "tvalue", FILTER_SANITIZE_STRING);
    $value = ["name" => $tname, "image" => $timage, "post" => $tpost, "quote" => $tquote, "category" => $tvalue];

    // ==============================================================================================================
    // ====================================Upload Image in local directory imported from data base===================
    // ==============================================================================================================

    // Check if file was uploaded without errors
    if (isset($image) && $image['error'] === UPLOAD_ERR_OK) {
        $file_tmp_path = $image['tmp_name'];
        $file_name = $image['name'];
        $file_size = $image['size'];
        $file_type = $image['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check file extension
        $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($file_ext, $allowed_ext)) {
            // Upload file to directory
            $upload_dir = 'uploads/';
            $dest_path = $upload_dir . $file_name;
            if (move_uploaded_file($file_tmp_path, $dest_path)) {
                // Image was uploaded successfully, insert its filename in the database
                echo 'Image was uploaded successfully, insert its filename in the database to move uploaded file.';
            } else {
                // Failed to move uploaded file
                echo 'Error: Failed to move uploaded file.';
            }
        } else {
            // Invalid file type
            echo 'Error: Invalid file type.';
        }
    } else {
        // No file was uploaded or an error occurred during upload
        echo 'Error: No file was uploaded or an error occurred during upload.';
    }

    // ==============================================================================================================
    // ====================================Prevent storing form data during refreshing of form page==================
    // ==============================================================================================================


    if ($obj->insert('teacher_forum', $value)) {
        echo "<script type=\"text/javascript\">alert('data has been successfully inserted into table');</script>";
        header('Location: ' . $_SERVER['PHP_SELF']);
        redirect('addteacher');
        exit();
    } else {
        echo "<script type=\"text/javascript\">  `alert ('Failed in data insertion');`</script>";
    }
    // Redirect to the same page to avoid inserting the same data again on refresh


}



?>