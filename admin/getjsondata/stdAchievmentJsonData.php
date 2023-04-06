<?php

include 'model/dbmodule.php';
$obj = new Database();

$obj->select("student_achievment", "*", null, null, null, null);
$stdAchievment = $obj->getResult();
header('Content-Type: application/json');
echo json_encode($stdAchievment);
?>