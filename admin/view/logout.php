<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION = array(); // Clear session data
session_destroy(); // Destroy session
// redirect('login');
header("Location: http://localhost/modern/");
// header("Location:localhost/modern/"); //this leads me towards http://localhost/modern/admin/localhost/modern/
// header("Location: login.php"); // Redirect to login page
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies
exit();

?>