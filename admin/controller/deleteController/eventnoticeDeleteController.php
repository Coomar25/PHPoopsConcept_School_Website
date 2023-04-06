<?php
include 'model/dbmodule.php';
$obj = new Database();
$Id = $_POST['id'];
$obj->dalete('notice', "id = $Id");
redirect('events');
?>