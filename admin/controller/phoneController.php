<?php
include "./model/phoneModel.php";

class phoneController
{
    public $phoneModel;

    function __construct()
    {
        $this->phoneModel = new phoneModel();
    }

    function showAllphone()
    {
        $phones = $this->phoneModel->getAllPhone();
        include "../view/home.php";
    }

    // function showphoneDetail($id)
    // {
    //     $phones = $this->phoneModel->getPhoneById($id);
    //     // $ma_loai = $this->phoneModel->getMaLoaiById($id);
    //     include "./view/home.php";
    // }
    function loadViewIphone()
    {
        $phones = $this->phoneModel->getAllPhone();
        include "./view/iphone.php";
    }
    function loadViewSamSung()
    {
        $phones = $this->phoneModel->getAllPhone();
        include "./view/samsung.php";
    }
    function loadViewOppo()
    {
        $phones = $this->phoneModel->getAllPhone();
        include "./view/Oppo.php";
    }
    function showPhoneDetail($id)
    {
        $phoneId = $this->phoneModel->getPhoneById($id);
        include "./view/phoneDetail.php";
    }
    function loadViewHangHoa()
    {
        $phones = $this->phoneModel->getAllPhone();
        include "./view/hanghoa.php";
    }
    function deletePhone($ma_hh)
    {
        $this->phoneModel->destroy($ma_hh);
        // var_dump($id);
        // die();
        header("location:?action=hang_hoa");
    }
    function loadViewCreatePhone()
    {
        include "./view/CreatePhone.php";
    }
    function storePhone()
    {
        if (isset($_POST['add_phone'])) {
            // $ma_hh = $_POST['ma_hh'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $ma_loai = $_POST['ma_loai'];
            $img = $_FILES['anh'];
            $img_path = uploadFile($img);

            $this->phoneModel->addPhone($name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path);
            header("location:?action=hang_hoa");
        }
    }
    function loadViewEditPhone($id)
    {
        $phone = $this->phoneModel->getPhoneById($id);
        include "./view/editPhone.php";
    }
    function storeEditPhone($id)
    {
        if (isset($_POST['update_phone'])) {
            $ma_hh = $_POST['ma_hh'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $ma_loai = $_POST['ma_loai'];
            $img = $_FILES['anh'];
            if ($img['size'] == 0) {
                $img_path = ($this->phoneModel->getPhoneById($id))['image'];
            } else {
                $img_path = uploadFile($img);
            }


            $this->phoneModel->update($ma_hh, $name, $price, $ngay_nhap, $mo_ta, $ma_loai, $img_path);
            header("location:?action=hang_hoa");
        }
    }
}
