<?php
include "../includes/connect.php";

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
    function destroy($ma_hh)
    {
        $sql = "DELETE FROM hanghoa WHERE ma_hh =$ma_hh";
        $this->conn->query($sql);
    }
    function addPhone($name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path)
    {
        $sql = "INSERT INTO hanghoa ( name, price, ngay_nhap, mo_ta, ma_loai ,image) VALUE ( '$name', '$price', '$ngay_nhap', '$mo_ta','$ma_loai', '$img_path')  ";
        $this->conn->query($sql);
    }
    function update($ma_hh, $name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path)
    {
        $sql = "UPDATE hanghoa SET ma_hh=$ma_hh, name='$name', price='$price', ngay_nhap='$ngay_nhap', image='$img_path', mo_ta='$mo_ta', ma_loai='$ma_loai' WHERE ma_hh='$ma_hh'";
        $this->conn->query($sql);
    }
}
