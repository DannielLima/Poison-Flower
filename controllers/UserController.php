<?php
require_once 'models/User.php';

class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = User::authenticate($email, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: index.php');
            } else {
                $error = "Invalid email or password.";
            }
        }
        include 'views/users/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            User::create($username, $email, $password);
            header('Location: index.php?page=login');
        }
        include 'views/users/register.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
    }
}
?>