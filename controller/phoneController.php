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
        include "./view/home.php";
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
}
