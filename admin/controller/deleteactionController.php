<?php
include 'model/dbmodule.php';
$obj = new Database();
$Id = $_POST['id'];
$obj->dalete('contact_message', "id = $Id");
redirect('contactmessage');
// if ($obj->dalete('contact_message', "id = $Id")) {
//     // echo "<script> alert('Message has been deleted successfully'); </script>";
// } else {
//     echo "<script> alert('Message'); </script>";
//     redirect('contactmessage');
// }
?>