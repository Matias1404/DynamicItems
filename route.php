<?php
    require_once "Controller/JugadoresController.php";
    require_once "Controller/ClubesController.php";
    require_once "Controller/LoginController.php";

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    
    if (!empty($_GET["action"])) {
        $action = $_GET["action"];
    }else{
        $action = "home";
    }

    $params = explode('/', $action);

    $jugadoresController = new JugadoresController();
    $clubesController = new ClubesController();
    $loginController = new LoginController();

    switch ($params[0]) {
        case 'home':
            $jugadoresController->showHome();
            break;
        case 'createJugador':
            $jugadoresController->createJugador();
            break;
        case 'deleteJugador':
            $jugadoresController->deleteJugador($params[1]);
            break;
        case 'jugador':
            $jugadoresController->showJugador($params[1]);
            break;
        case 'editJugador':
            $jugadoresController->editJugador($params[1]);
            break;
        case 'clubes':
            $clubesController->showClubes();
            break;
        case 'createClub':
            $clubesController->createClub();
            break;     
        case 'deleteClub':
            $clubesController->deleteClub($params[1]);
            break;   
        case 'club':
            $clubesController->showClub($params[1]);
            break;
        case 'editClub':
            $clubesController->editClub($params[1]);
            break;
        case 'login':
            $loginController->login();
            break;
        case 'verify':
            $loginController->verifyLogin();
            break;
        case 'logout':
            $loginController->logout();
            break;
    }

