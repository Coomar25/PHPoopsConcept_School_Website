<?php
include 'model/dbmodule.php';
$obj = new Database();
if (!empty($_POST)) {
    $Day = $_POST['day'];
    $MonthYear = $_POST['monthyear'];
    $NoticeTitle = $_POST['noticetitle'];
    $NoticeMessage = $_POST['noticemessage'];
    $value = ["day" => $Day, "monthyear" => $MonthYear, "noticetitle" => $NoticeTitle, "noticemessage" => $NoticeMessage];
    if ($obj->insert('notice', $value)) {
        echo "Notice has been inserted successfully";
    } else {
        echo "Failed in insertion of notice";
    }
}

?>