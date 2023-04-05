<?php
include 'model/dbmodule.php';
$obj = new Database();
$obj->select("teacher_forum", "*", null, null, null, null);
$teacherrecord = $obj->getResult();
header('contentp-Type: application json');
echo json_encode($teacherrecord);
?>