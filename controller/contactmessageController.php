<?php

include 'model/dbmodule.php';
$obj = new Database();

// Disable caching of the page
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

if (!empty($_POST)) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    if (empty($Name) || empty($Email) || empty($Message)) {
        echo "<script> alert('Please fill up the message properly');";
        include 'view/contact.php';
        exit;
    }
    $value = ["name" => $Name, "email" => $Email, "message" => $Message];

    if ($obj->insert('contact_message', $value)) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['empty_fields'] = true;
    } else {
        echo "failed in sending messages";
    }


    if (isset($_SESSION['empty_fields']) && $_SESSION['empty_fields'] == true) {
        echo " <script> alert('Thank you for contacting with us. We will contact you later. Tada Hope you have a great Day!') </script>";
        include 'view/overall_contact.php';
        unset($_SESSION['empty_fields']);
    }
}




?>