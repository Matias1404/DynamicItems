<?php

require_once "./Model/JugadoresModel.php";
require_once "./View/JugadoresView.php";
require_once "./Model/ClubesModel.php";

class JugadoresController {

    private $model;
    private $modelclubes;
    private $view;

    function __construct(){
        $this->model = new JugadoresModel();
        $this->modelclubes = new ClubesModel();
        $this->view = new JugadoresView();
    }

    function showHome(){
        $logged = $this->checkLoggedIn();
        $jugadores = $this->model->getJugadores();
        $clubes = $this->modelclubes->getClubes();
        $this->view->viewHome($jugadores, $clubes, $logged);  
    }

    function createJugador(){
        if (!$this->campSeteados()){
            $this->model->insertJugador($_POST['nombre'], $_POST['numero'], $_POST['posicion'], $_POST['club']);
            $this->view->viewHomeLocation();
        }
        else {
            $logged = $this->checkLoggedIn();
            $this->view->showError($logged, 'Faltan campos por completar');
        }
        
    }

    function deleteJugador($id){
        $this->model->deleteJugadorDB($id);
        $this->view->viewHomeLocation();
    }

    function showJugador($id){
        $logged = $this->checkLoggedIn();
        $jugador = $this->model->getjugador($id);
        $clubes = $this->modelclubes->getClubes();
        $this->view->viewJugador($jugador, $clubes, $logged);
    }

    function editJugador($id){
        if (!$this->campSeteados()){
            $this->model->editJugadorDB($_POST['nombre'], $_POST['numero'], $_POST['posicion'], $_POST['club'], $id);
            $this->showJugador($id);
        }
        else{
            $logged = $this->checkLoggedIn();
            $this->view->showError($logged, 'Faltan campos por completar');
        }
        
    }
    
    function campSeteados(){
        return (empty($_POST['nombre']) || empty($_POST['numero']) || empty($_POST['posicion']));
    }

    function checkLoggedIn(){
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        return isset($_SESSION["email"]);
    }
}