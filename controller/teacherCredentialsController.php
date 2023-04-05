<?php

include 'model/dbmodule.php';
$obj = new Database();
$user = new AuntheticationController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user->authenticate($username, $password);
}

class AuntheticationController
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }


    public function authenticate($username, $password)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM teacher_login WHERE username=? AND password=?");
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("ss", $username, $password);
        if (!$stmt->execute()) {
            die("Error executing statement: " . $stmt->error);
        }
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            // row variable is authenticated
            $row = $result->fetch_assoc();
            // store user data in session variable
            $_SESSION['authenticated_user'] = $row;

            if ($row['usertype'] === 'user') {
                redirect('class');
                // header("Location: user_panel.php");
            } elseif ($row['usertype'] === 'admin') {
                // redirect is used to assign the value of r
                // redirect('adminredirect');
                header("location:admin/");
            }
            // or below code is to understand the ABOVE CODE
            // if ($result->num_rows === 1) {
            //     // user is authenticated
            //     $user = $result->fetch_assoc();

            //     // store user data in session variable
            //     $_SESSION['user'] = $user;

            //     // redirect to appropriate panel
            //     if ($user['usertype'] === 'user') {
            //         redirect('class');
            //     } elseif ($user['usertype'] === 'admin') {
            //         header('Location: /admin/');
            //     }
        } else {
            echo "Invalid username or password";
        }
    }

}



?>