<?php

require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController{
    
    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function login($error = null){
        $logged = $this->checkLoggedIn();
        $this->view->viewLogin($logged, $error);
    }

    function verifyLogin(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->password)){
                session_start();
                $_SESSION["email"] = $email; 


                $this->view->showHomeLocation();
            }
            else {
                $this->login("Acceso denegado, el email o contraseña son incorrectos");
            }
        } 
        else {
            $logged = $this->checkLoggedIn();
            $this->view->showError($logged, 'Faltan campos por completar');
        }
    }

    function checkLoggedIn(){
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        return isset($_SESSION["email"]);
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showHomeLocation();
    }
}