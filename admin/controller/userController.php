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


    function loadViewLogin()
    {
        include "./view/login.php";
    }
    function loadViewAdmin()
    {
        $users = $this->userModel->getAllUser();
        // var_dump($users);
        // die();
        include "./view/homeAdmin.php";
    }

    function loadViewHome()
    {
        include "../view/home.php";
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
                        header("location:?action=./admin/homeAdmin");
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
            header("location:../?action=home");
        }
    }


    function delete($ma_kh)
    {
        $this->userModel->destroy($ma_kh);
        // var_dump($id);
        // die();
        header("location:?action=homeAdmin");
    }
    function loadViewCreateUser()
    {
        include "./view/createUser.php";
    }
    function storeUser()
    {
        if (isset($_POST['add_user'])) {
            $ma_kh = $_POST['ma_kh'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            $img = $_FILES['anh'];
            $img_path = uploadFile($img);
            $role = $_POST['role'];

            $this->userModel->addUser($ma_kh, $fullname, $email, $password, $phone, $img_path, $role, $username);
            header("location:?action=homeAdmin");
        }
    }
    function loadViewEditUser($id)
    {
        $user = $this->userModel->getuserById($id);
        include "./view/editUser.php";
    }
    function storeEditUser($id)
    {
        if (isset($_POST['update'])) {
            $ma_kh = $_POST['ma_kh'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            $img = $_FILES['anh'];
            $role = $_POST['role'];
            if ($img['size'] == 0) {
                $img_path = ($this->userModel->getuserById($id))['avatar'];
            } else {
                $img_path = uploadFile($img);
            }


            $this->userModel->updateUser($ma_kh, $fullname, $email, $password, $phone, $img_path, $role, $username);
            header("location:?action=homeAdmin");
        }
    }
}
