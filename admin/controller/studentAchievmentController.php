<?php
include 'model/dbmodule.php';
$obj = new Database();


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

if (!empty($_POST)) {
    $stdname = $_POST['stdname'];
    $stdgpa = $_POST['stdgpa'];
    $stdachievment = $_POST['stdachievment'];
    $stdimg = $image = $_FILES['stdimg'];
    // $image = $_FILES['stdimg'];
    $stdimg = $_FILES['stdimg']['name']; // Retrieves the name of the uploaded file
    $temp_file = $_FILES['stdimg']['tmp_name']; // Retrieves the temporary location of the uploaded file
    $stdquote = $_POST['stdquote'];
    $value = ["name" => $stdname, "gpa" => $stdgpa, "achievmemt" => $stdachievment, "image" => $stdimg, "quote" => $stdquote];


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


    if ($obj->insert('student_achievment', $value)) {
        echo "<script type=\"text/javascript\">alert('data has been successfully inserted into table');</script>";
        header('Location: ' . $_SERVER['PHP_SELF']);
        redirect('achievment');
        exit();
    } else {
        echo "<script type=\"text/javascript\">  `alert ('Failed in data insertion');`</script>";
    }
    // Redirect to the same page to avoid inserting the same data again on refresh
}



?>