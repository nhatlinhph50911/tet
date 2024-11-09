<?php
include_once "./includes/connect.php";

class userModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAlluser()
    {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getuserById($id)
    {
        $sql = "SELECT * FROM user WHERE ma_kh=$id";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function login($email)
    {
        $sql = "SELECT*FROM user WHERE email='$email'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
