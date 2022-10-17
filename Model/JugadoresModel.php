<?php

class JugadoresModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_futbolargentino;charset=utf8', 'root', '');
    }

    function getJugadores($id = null){
        if ($id){
            $sentencia = $this->db->prepare("SELECT * FROM jugadores j INNER JOIN clubes c ON j.id_club = c.id_club WHERE c.id_club=?");
            $sentencia->execute(array($id));
        }
        else {
            $sentencia = $this->db->prepare("SELECT * FROM jugadores j INNER JOIN clubes c ON j.id_club = c.id_club");
            $sentencia->execute();
        }
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    function insertJugador($nombre, $numero, $posicion, $club) {
        $sentencia = $this->db->prepare( "INSERT INTO jugadores(nombre, numero, posicion, id_club) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($nombre, $numero, $posicion, $club));
    }

    function deleteJugadorDB($id){
        $sentencia = $this->db->prepare("DELETE FROM jugadores WHERE id_jugador=?");
        $sentencia->execute(array($id));
    }

    function getJugador($id){
        $sentencia = $this->db->prepare("SELECT * FROM jugadores j INNER JOIN clubes c ON j.id_club = c.id_club  WHERE j.id_jugador=?");
        $sentencia->execute(array($id));
        $jugador = $sentencia->fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

    function editJugadorDB($nombre, $numero, $posicion, $club, $id){
        $query = $this->db->prepare("UPDATE jugadores SET nombre = ?, numero = ?, posicion = ?, id_club = ? WHERE id_jugador= ?");
        $query->execute([$nombre, $numero, $posicion,  $club ,$id]);
    }
    

}