<?php

include 'model/dbmodule.php';
$obj = new Database();


if (!empty($_POST)) {

    $stdName = $_POST['stdname'];
    $mName = $_POST['mname'];
    $fName = $_POST['fname'];
    $Address = $_POST['address'];
    $Contact = $_POST['contact'];
    $Gender = $_POST['gender'];
    $Csei = $_POST['csei']; // Current school enrolled in 
    $Ccei = isset($_POST['ccei']) ? $_POST['ccei'] : ''; //Current class enrolled in /////// This is ternary operator if not done this this messgage will show :-------> Notice: Undefined index: ccei in D:\xampp\htdocs\modern\controller\newenrollmentController.php on line 17
    $Cemebs = isset($_POST['cemebs']) ? $_POST['cemebs'] : ''; //Current enrollment at modern englsh boarding school
    $Terms = isset($_POST['terms']) ? $_POST['terms'] : '';


    if (empty($stdName) || empty($mName) || empty($fName) || empty($Address) || empty($Contact) || empty($Gender) || empty($Csei) || empty($Ccei) || empty($Cemebs) || empty($Terms)) {
        echo "<script> alert('Please fill the required form!'); </script>";
        include 'view/newadmission.php';
        exit;
    }
    ///Here i debug the code where i insert contact in age field but i didn't change the field name in data base
    $value = ["stdname" => $stdName, "mname" => $mName, "fname" => $fName, "address" => $Address, "age" => $Contact, "gender" => $Gender, "csei" => $Csei, "ccei" => $Ccei, "cemebs" => $Cemebs, "aggrement" => $Terms];

    // Insert the values into the database
    if ($obj->insert('new_admission', $value)) {
        echo "<script> alert('Your form has been successfuly sent. Thnak you so much for filling the form. We will contact you later!'); </script>";
        include 'view/newadmission.php';
    } else {
        echo "failed in submission of form";
    }




    // if (empty($stdName) && empty($mName) && empty($fName) && empty($Address) && empty($Age) && empty($Gender) && empty($Csei) && empty($Ccei) && empty($Cemebs) && empty($Terms)) {
    //     // echo "<script> alert('Please fill the required form!'); </script>";
    //     if (session_status() == PHP_SESSION_NONE) {
    //         session_start();
    //     }
    //     $_SESSION['empty_fields'] = true;
    //     if (isset($_SESSION['empty_fields'])) {
    //         echo "<script> alert('Please fill the required form!'); </script>";
    //         include 'view/newadmission.php';
    //         unset($_SESSION['empty_fileds']);
    //     }
    //     exit;
    // }


    // if (!empty($stdName) && !empty($mName) && !empty($fName) && !empty($Address) && !empty($Age) && !empty($Gender) && !empty($Csei) && !empty($Ccei) && !empty($Cemebs) && !empty($Terms)) {

    //     // Set the values in an array
    //     $value = ["stdname" => $stdName, "mname" => $mName, "fname" => $fName, "address" => $Address, "age" => $Age, "gender" => $Gender, "csei" => $Csei, "ccei" => $Ccei, "cemebs" => $Cemebs, "aggrement" => $Terms];

    //     // Insert the values into the database
    //     if ($obj->insert('new_admission', $value)) {
    //         echo "form has been submitted successfully";
    //     } else {
    //         echo "failed in submission of form";
    //     }
    // } else {
    //     // Start session if it's not already started
    //     // if (session_status() == PHP_SESSION_NONE) {
    //     //     session_start();
    //     // }
    //     // $_SESSION['empty_fields'] = true;
    //     redirect('newadmission');
    // }


    // if (isset($_SESSION['empty_fields'])) {
    //     echo "<script> alert('Please fill the required form!'); </script>";
    //     unset($_SESSION['empty_fileds']);
    // }


}




?>