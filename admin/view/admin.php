<?php
// admin/index.php
// start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// check if user is authenticated as admin
if (!isset($_SESSION['authenticated_user']) || $_SESSION['authenticated_user']['usertype'] !== 'admin') {
    // redirect to login page if not authenticated as admin
    echo "you don't have permission to acces this page";
    // header('Location: ../view/teacherlogin.php');
    // header('Location: error.php');
    exit();
}
// rest of admin page cod
?>

<?php

include 'header.php';
?>

<!-- 

is it really secure if i processed the authentication and authorization process using session
Using sessions for authentication and authorization is a common practice in PHP, but it is important to follow best practices to ensure the security of the application. Sessions can be secure if they are implemented correctly.

Here are some best practices for using sessions in PHP for authentication and authorization:

Use a strong session ID generation algorithm: The session ID should be generated using a strong algorithm, such as using a random number generator to generate a unique session ID. PHP provides a built-in function called session_regenerate_id() that can be used to regenerate the session ID periodically to make it more difficult to guess or steal.

Use HTTPS: Use HTTPS to encrypt the session data in transit between the client and server to prevent interception and tampering of the session data.

Store sensitive data on the server: Store sensitive data, such as the user's password, on the server and not in the session data.

Use session timeouts: Set the session timeout to expire the session after a period of inactivity to prevent session hijacking attacks.

Validate session data: Always validate session data before using it to prevent session hijacking or other types of attacks. For example, validate that the user's ID in the session matches the ID of the user in the database.

Destroy sessions when no longer needed: Always destroy sessions when they are no longer needed, such as when the user logs out or after a period of inactivity.

By following these best practices, sessions can be a secure way to implement authentication and authorization in PHP. However, it is important to keep in mind that no security measure is foolproof, and it is always a good idea to stay up to date on the latest security best practices and vulnerabilities. -->