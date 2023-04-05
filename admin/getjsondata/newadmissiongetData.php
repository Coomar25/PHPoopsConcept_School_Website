<?php
include 'model/dbmodule.php';
$obj = new Database();
$obj->select("new_admission", "*", null, null, null, null);
$admissionresult = $obj->getResult();
header('contentp-Type: application json');
echo json_encode($admissionresult);
?>