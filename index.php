<?php

include './controller/phoneController.php';
include './controller/userController.php';
include './controller/cmtController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

$phoneController = new phoneController();
$userController = new userController();
$cmtController = new cmtController();

switch ($action) {
    case "home":
        $phoneController->showAllphone();
        break;
    case "phoneDetail":
        $id = $_GET['id'];
        $phoneController->showPhoneDetail($id);
        break;
    case "iphone":
        $phoneController->loadViewIphone();
        break;
    case "samsung":
        $phoneController->loadViewSamSung();
        break;
    case "oppo":
        $phoneController->loadViewOppo();
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
    case "add-cmt":
        $id = $_GET['id'];
        $cmtController->addCmt($id);
        break;
}
