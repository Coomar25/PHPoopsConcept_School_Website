<?php
session_start();
$base_url = 'http://localhost/modern/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
// include 'Helper/SpecialCharHelper.php';
// include 'Helper/FlashMessageHelper.php';
include 'helper/ErrorHelper.php';
include 'helper/RouteHelper.php';

if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {

        case 'home':
            $_SESSION['active_url'] = 'home';
            include 'controller/homeController.php';
            break;
        case 'class':
            $_SESSION['active_url'] = 'class';
            include 'controller/classController.php';
            break;
        case 'teacherlogin':
            $_SESSION['active_url'] = 'teacherlogin';
            include 'controller/teacherLoginController.php';
            break;
        case 'newadmission':
            $_SESSION['active_url'] = 'newadmission';
            include 'controller/newadmissionController.php';
            break;
        case 'teacherloginCredentials':
            $_SESSION['active_url'] = 'teacherloginCredentials';
            include 'controller/teacherCredentialsController.php';
            break;
        case 'adminredirect':
            $_SESSION['active_url'] = 'adminredirect';
            include 'admin/controllers/admindashboardController.php';
            break;
        case 'newenrollment':
            $_SESSION['active_url'] = 'newenrollment';
            include 'controller/newenrollmentController.php';
            break;

        case 'contact':
            $_SESSION['active_url'] = 'contact';
            include 'controller/contactController.php';
            break;
        case 'contactmessage':
            $_SESSION['active_url'] = 'contactmessage';
            include 'controller/contactmessageController.php';
            break;
        case 'events':
            $_SESSION['active_url'] = 'events';
            include 'controller/eventsController.php';
            break;

        default:
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/homeController.php';
}

?>