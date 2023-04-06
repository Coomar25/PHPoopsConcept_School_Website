<?php
include 'model/dbmodule.php';
$obj = new Database();
$Id = $_POST['id'];
$obj->dalete('student_achievment', "id = $Id");
redirect('achievment');
?>