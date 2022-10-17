<?php
require_once './Librerias/smarty-4.2.1/libs/Smarty.class.php';

class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function viewLogin($logged, $error = null){
        $this->smarty->assign('titulo', 'Log In');
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./Template/login.tpl');
    }

    function showError($logged, $error){
        $this->smarty->assign('titulo', 'ERROR');
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./Template/error.tpl');
    }

    function showHomeLocation(){
        header("Location:" . BASE_URL);
    }
}