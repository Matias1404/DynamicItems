<?php

require_once "./Model/ClubesModel.php";
require_once "./View/ClubesView.php";
require_once "./Model/JugadoresModel.php";

class ClubesController {
    
    private $model;
    private $modeljugadores;
    private $view;

    function __construct(){
        $this->model = new ClubesModel();
        $this->view = new ClubesView();
        $this->modeljugadores = new JugadoresModel();
    }

    function showClubes(){
        $logged = $this->checkLoggedIn();
        $clubes = $this->model->getClubes();
        $this->view->viewClubes($clubes, $logged);  
    }

    function showClub($id){
        $logged = $this->checkLoggedIn();
        $club = $this->model->getClub($id);
        $jugadores = $this->modeljugadores->getJugadores($id);
        $this->view->viewClub($jugadores, $club, $logged);
    }

    function deleteClub($id){
        try {
            $this->model->deleteClubDB($id);
            $this->showClubes();
        } 
        catch (Exception) {
            $logged = $this->checkLoggedIn();
            $this->view->showError($logged, 'Este club no se puede borrar aun tiene jugadores');
        }
    }

    function createClub(){
        if (!$this->campSeteados()){
            $this->model->insertClub($_POST['club']);
            $this->showClubes();
        } 
        else {
            $logged = $this->checkLoggedIn();
            $this->view->showError($logged, 'Faltan campos por completar');
        }
        
    }

    function editClub($id){
        if (!$this->campSeteados()){
            $this->model->editClubDB($_POST['club'], $id);
            $this->showClub($id);
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

    function campSeteados(){
        return empty($_POST['club']);
    }
}