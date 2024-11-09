<?php
include "./model/userModel.php";
session_start();

class userController
{
    public $userModel;

    function __construct()
    {
        $this->userModel = new userModel();
    }

    // function showAlluser()
    // {
    //     $users = $this->userModel->getAlluser();
    //     include "./view/home.php";
    // }
    function loadViewLogin()
    {
        include "./view/login.php";
    }
    function loadViewAdmin()
    {

        include "./admin/view/homeAdmin.php";
    }
    function checkLogin()
    {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $user = $this->userModel->login($email);

            if ($user) {
                if ($user['pass'] == $pass) {
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['pass'] = $user['pass'];
                    $_SESSION['role'] = $user['role'];
                    if ($_SESSION['role'] == 1) {
                        header("location:./admin/?action=homeAdmin");
                    } else {
                        header("location:?action=home");
                    }
                } else {
                    echo "<script>alert('Mat khau khong dung'); </script>";
                    // header("location:?action=login");
                }
            } else {
                echo "<script>alert('Nguoi dung khong ton tai');</script>";
                // header("location:?action=login");
            }
        }
    }
    public function logout()
    {
        if (isset($_SESSION['email'])) {
            session_destroy();
            // session_unset();
            header("location:?action=home");
        }
    }
}
