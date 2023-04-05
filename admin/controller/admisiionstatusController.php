<?php

include 'model/dbmodule.php';
$obj = new Database();

// $id = $_POST['id'];
// $status = $_POST['admissionstatus'];
// print_r($status);
// print_r($id);


// // update($table, $data, $where = null)
// $data = array(
//     "stdname" => $student_name,
//     "age" => $age
// );
// $where = "id = $id";
// $obj->update("students", $data, $where);

if (!empty($_POST)) {
    $Id = $_POST['id'];
    $Status = $_POST['admissionstatus'];
    $value = ["status" => $Status];
    if ($obj->update('new_admission', $value, "id = $Id")) {
        echo "Admission has been done successfully";
        // echo "<script> alert('Admission has been done successfully'); </script>";
        // header('Location: ' . $_SERVER['PHP_SELF']);
        // redirect('newadmission');
        // exit();
    } else {
        // echo "<script> alert('Failed in admission'); </script>";
        redirect('newadmission');
    }
}





?>