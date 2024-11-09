<?php
require_once "./includes/connect.php";

class cmtModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }
    function updateCmt($content, $ma_hh)
    {
        $sql = "INSERT INTO comment (content, ma_hh) VALUE ('$content','$ma_hh')";
        $this->conn->query($sql);
    }
}
