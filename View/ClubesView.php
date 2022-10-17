<?php
require_once './Librerias/smarty-4.2.1/libs/Smarty.class.php';

class ClubesView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function viewClubes($clubes, $logged){
        $this->smarty->assign('titulo', 'Clubes del Futbol Argentino');
        $this->smarty->assign('clubes', $clubes);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('./Template/clubes.tpl');
    }

    function viewClub($jugadores, $club, $logged){       
        $this->smarty->assign('titulo', $club->club);
        $this->smarty->assign('jugadores', $jugadores);
        $this->smarty->assign('club', $club);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('./Template/club.tpl');
    }

    function showError($logged, $error){
        $this->smarty->assign('titulo', 'ERROR');
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./Template/error.tpl');
    }
}