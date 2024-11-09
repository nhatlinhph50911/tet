<?php
require_once "../includes/connect.php";

class userModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllUser()
    {
        $sql = "SELECT*FROM user";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getuserById($id)
    {
        $sql = "SELECT * FROM user WHERE ma_kh='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function login($email)
    {
        $sql = "SELECT*FROM user WHERE email='$email'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function destroy($ma_kh)
    {
        $sql = "DELETE FROM user WHERE ma_kh ='$ma_kh'";
        $this->conn->query($sql);
    }
    function addUser($ma_kh, $fullname, $email, $password, $phone, $img_path, $role, $username)
    {
        $sql = "INSERT INTO user ( ma_kh, full_name, email, pass, phone, avatar, role,username) VALUE ('$ma_kh', '$fullname', '$email', '$password', '$phone', '$img_path', $role,'$username')  ";
        $this->conn->query($sql);
    }
    function updateUser($ma_kh, $fullname, $email, $password, $phone, $img_path, $role, $username)
    {
        $sql = "UPDATE user SET email='$email', pass='$password', phone='$phone', full_name='$fullname', avatar='$img_path', username='$username', role='$role' WHERE ma_kh='$ma_kh'";
        $this->conn->query($sql);
    }
}
