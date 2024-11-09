<?php
include "./includes/connect.php";

class phoneModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllPhone()
    {
        $sql = "SELECT * FROM hanghoa";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getPhoneById($id)
    {
        $sql = "SELECT * FROM hanghoa WHERE ma_hh=$id";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
