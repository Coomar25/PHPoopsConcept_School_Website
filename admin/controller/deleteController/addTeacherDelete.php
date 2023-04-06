<?php
include 'model/dbmodule.php';
$obj = new Database();
$Id = $_POST['id'];
$obj->dalete('teacher_forum', "id = $Id");
redirect('addteacher');
?>