<?php

include './controller/phoneController.php';
include './controller/userController.php';
include './controller/loaiController.php';
include "../includes/help.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

$phoneController = new phoneController();
$userController = new userController();
$loaiController = new loaiController();

switch ($action) {
    case "home":
        $phoneController->showAllphone();
        break;
    case "phoneDetail":
        $id = $_GET['id'];
        $phoneController->showPhoneDetail($id);
        break;
    case "login":
        $userController->loadViewLogin();
        break;
    case "checkLogin":
        $userController->checkLogin();
        break;
    case "homeAdmin":
        $userController->loadViewAdmin();
        break;
    case "logout":
        $userController->logout();
        break;
    case "delete":
        $ma_kh = $_GET['id'];
        $userController->delete($ma_kh);
        break;
    case "createUser":
        $userController->loadViewCreateUser();
        break;
    case "store-user":
        $userController->storeUser();
        break;
    case "edit":
        $id = $_GET['id'];
        $userController->loadViewEditUser($id);
        break;
    case "store-editUser":
        $id = $_GET['id'];
        $userController->storeEditUser($id);
        break;
    case "hang_hoa":
        $phoneController->loadViewHangHoa();
        break;
    case "deletePhone":
        $ma_hh = $_GET['id'];
        $phoneController->deletePhone($ma_hh);
        break;
    case "createPhone":
        $phoneController->loadViewCreatePhone();
        break;
    case "store-phone":
        $phoneController->storePhone();
        break;
    case "editPhone":
        $id = $_GET['id'];
        $phoneController->loadViewEditPhone($id);
        break;
    case "storeEditPhone":
        $id = $_GET['id'];
        $phoneController->storeEditPhone($id);
        break;
    case "loai":
        $loaiController->loadviewLoai();
        break;
    case "createLoaiHang":
        $loaiController->loadViewCreateloaiHang();
        break;
    case "store-loaiHang":
        $loaiController->storeLoaiHang();
        break;
    case "deleteLoaiHang":
        $ma_loai = $_GET['id'];
        $loaiController->delete($ma_loai);
        break;
    case "editLoaiHang":
        $id = $_GET['id'];
        $loaiController->loadViewEditLoaiHang($id);
        break;
}
