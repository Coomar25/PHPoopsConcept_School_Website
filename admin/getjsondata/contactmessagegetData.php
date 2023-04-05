<?php

include 'model/dbmodule.php';
$obj = new Database();

$obj->select("contact_message", "*", null, null, null, null);
$cmessage = $obj->getResult();
// header chai php function ho jasle chai JSON format ma data returned garauxa
header('Content-Type: application/json');
echo json_encode($cmessage);

?>