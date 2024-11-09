<?php
include_once "../includes/connect.php";
class loaiModel
{
    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllloai()
    {
        $sql = "SELECT * FROM loaihang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getLoaiById($id)
    {
        $sql = "SELECT * FROM loaihang WHERE ma_loai= '$id'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function destroy($ma_loai)
    {
        $sql = "DELETE FROM loaihang WHERE ma_loai =$ma_loai";
        $this->conn->query($sql);
    }
    function add($name)
    {
        $sql = "INSERT INTO loaihang ( ten_loai ) VALUE ( '$name')  ";
        $this->conn->query($sql);
    }
    // function update($ma_hh, $name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path)
    // {
    //     $sql = "UPDATE hanghoa SET ma_hh=$ma_hh, name='$name', price='$price', ngay_nhap='$ngay_nhap', image='$img_path', mo_ta='$mo_ta', ma_loai='$ma_loai' WHERE ma_hh='$ma_hh'";
    //     $this->conn->query($sql);
    // }
}
