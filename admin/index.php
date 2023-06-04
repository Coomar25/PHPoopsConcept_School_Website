<?php
session_start();
$base_url = 'http://localhost/modern/admin/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
// include 'Helper/SpecialCharHelper.php';
// include 'Helper/FlashMessageHelper.php';
// include 'helper/ErrorHelper.php';
include 'helper/RouteHelper.php';

if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'achievment':
            $_SESSION['active_url'] = 'achievment';
            include 'controller/achievmentController.php';
            break;
        case 'studentAchievment':
            $_SESSION['active_url'] = 'studentAchievment';
            include 'controller/studentAchievmentController.php';
            break;

        case 'addteacher':
            $_SESSION['active_url'] = 'addteacher';
            include 'controller/addteacherController.php';
            break;
        case 'teacherforum':
            $_SESSION['active_url'] = 'teacherforum';
            include 'controller/teacherforumController.php';
            break;
        case 'logout':
            $_SESSION['active_url'] = 'logout';
            include 'controller/logoutController.php';
            break;

        case 'newadmission':
            $_SESSION['active_url'] = 'newadmission';
            include 'controller/newadmissionController.php';
            break;
        case 'contactmessage':
            $_SESSION['active_url'] = 'contactmessage';
            include 'controller/contactmessageController.php';
            break;

        case 'contactJson';
            $_SESSION['active_url'] = 'contactJson';
            include 'getjsondata/contactmessagegetData.php';
            break;
        case 'admissiondJson';
            $_SESSION['active_url'] = 'admissionJson';
            include 'getjsondata/newadmissiongetData.php';
            break;
        case 'noticeEventJson';
            $_SESSION['active_url'] = 'noticeEvent';
            include 'getjsondata/noticeEventgetData.php';
            break;
        case 'stdAchievmentJsonData';
            $_SESSION['active_url'] = 'stdAchievmentJsonData';
            include 'getjsondata/stdAchievmentJsonData.php';
            break;
        case 'admissionstatus';
            $_SESSION['active_url'] = 'admissionstatus';
            include 'controller/admisiionstatusController.php';
            break;
        case 'deleteaction':
            $_SESSION['active_url'] = 'deleteaction';
            include 'controller/deleteController/deleteactionController.php';
            break;
        case 'eventnoticeDelete':
            $_SESSION['active_url'] = 'eventnoticeDelete';
            include 'controller/deleteController/eventnoticeDeleteController.php';
            break;
        case 'addTeacherDelete':
            $_SESSION['active_url'] = 'addTeacherDelete';
            include 'controller/deleteController/addTeacherDelete.php';
            break;
        case 'stdAchievmentDelete':
            $_SESSION['active_url'] = 'stdAchievmentDelete';
            include 'controller/deleteController/stdAchievmentDelete.php';
            break;
        case 'events':
            $_SESSION['active_url'] = 'events';
            include 'controller/eventsController.php';
            break;
        case 'noticeform':
            $_SESSION['active_url'] = 'noticeform';
            include 'controller/noticeformController.php';
            break;
        case 'teacherRecord':
            $_SESSION['active_url'] = 'teacherRecord';
            include 'getjsondata/teacherrecordgetData.php';
            break;
        default:
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/adminController.php';
}

?>