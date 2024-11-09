<?php
include "./model/cmtModel.php";

class cmtController
{
    public $cmtModel;

    function __construct()
    {
        $this->cmtModel = new cmtModel();
    }
    function addCmt($id)
    {
        if (isset($_POST['add_comment'])) {
            $content = $_POST['content'];
            $ma_hh = $_GET['id'];
            $this->cmtModel->updateCmt($content, $ma_hh);
            header("location:?action=home");
        }
    }
}
