<?php
include 'model/dbmodule.php';
$obj = new Database();
$obj->select("notice", "*", null, null, null, null);
$noticeResult = $obj->getResult();
header('Content-Type: application/json');
echo json_encode($noticeResult);

?>