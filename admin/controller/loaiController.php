<?php
include "./model/loaiModel.php";

class loaiController
{
    public $loaiModel;

    function __construct()
    {
        $this->loaiModel = new loaiModel();
    }

    // function showAllloai()
    // {
    //     $phones = $this->phoneModel->getAllPhone();
    //     include "../view/home.php";
    // }

    // // function showphoneDetail($id)
    // // {
    // //     $phones = $this->phoneModel->getPhoneById($id);
    // //     // $ma_loai = $this->phoneModel->getMaLoaiById($id);
    // //     include "./view/home.php";
    // // }
    // function showPhoneDetail($id)
    // {
    //     $phoneId = $this->phoneModel->getPhoneById($id);
    //     include "./view/phoneDetail.php";
    // }
    function loadViewloai()
    {
        $loais = $this->loaiModel->getAllloai();
        include "./view/loaiHang.php";
    }
    function delete($ma_loai)
    {
        $this->loaiModel->destroy($ma_loai);
        header("location:?action=loai");
    }
    function loadViewCreateloaiHang()
    {
        include "./view/CreateLoaiHang.php";
    }
    function storeLoaiHang()
    {
        if (isset($_POST['add_loaiHang'])) {
            $name = $_POST['name'];

            $this->loaiModel->add($name);
            header("location:?action=loai");
        }
    }
    function loadViewEditLoaiHang($id)
    {
        $loai = $this->loaiModel->getLoaiById($id);
        include "./view/editLoaiHang.php";
    }
    // function storeEditPhone($id)
    // {
    //     if (isset($_POST['update_phone'])) {
    //         $ma_hh = $_POST['ma_hh'];
    //         $name = $_POST['name'];
    //         $price = $_POST['price'];
    //         $ngay_nhap = $_POST['ngay_nhap'];
    //         $mo_ta = $_POST['mo_ta'];
    //         $ma_loai = $_POST['ma_loai'];
    //         $img = $_FILES['anh'];
    //         if ($img['size'] == 0) {
    //             $img_path = ($this->phoneModel->getPhoneById($id))['image'];
    //         } else {
    //             $img_path = uploadFile($img);
    //         }


    //         $this->phoneModel->update($ma_hh, $name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path);
    //         header("location:?action=hang_hoa");
    //     }
    // }
}
