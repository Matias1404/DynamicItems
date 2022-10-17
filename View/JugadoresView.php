<?php
require_once './Librerias/smarty-4.2.1/libs/Smarty.class.php';

class JugadoresView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function viewHome($jugadores, $clubes, $logged){
        $this->smarty->assign('titulo', 'Jugadores del Futbol Argentino');
        $this->smarty->assign('jugadores', $jugadores);
        $this->smarty->assign('clubes', $clubes);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('./Template/jugadores.tpl');
    }

    function viewJugador($jugador, $clubes, $logged){       
        $this->smarty->assign('titulo', $jugador->nombre);
        $this->smarty->assign('jugador', $jugador);
        $this->smarty->assign('clubes', $clubes);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('./Template/jugador.tpl');
    }

    function showError($logged, $error){
        $this->smarty->assign('titulo', 'ERROR');
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./Template/error.tpl');
    }

    function viewHomeLocation(){
        header("Location:" . BASE_URL);
    }
}