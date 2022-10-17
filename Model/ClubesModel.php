<?php

class ClubesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_futbolargentino;charset=utf8', 'root', '');
    }

    function getClubes(){
        $sentencia = $this->db->prepare("SELECT * FROM clubes");
        $sentencia->execute();
        $clubes = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $clubes;
    }

    function insertClub($club) {
        $sentencia = $this->db->prepare( "INSERT INTO clubes(club) VALUES(?)");
        $sentencia->execute(array($club));
    }

    function deleteClubDB($id){
        $sentencia = $this->db->prepare("DELETE FROM clubes WHERE id_club=?");
        $sentencia->execute(array($id));
    }

    function getClub($id){
        $sentencia = $this->db->prepare("SELECT * FROM clubes WHERE id_club=?");
        $sentencia->execute(array($id));
        $club = $sentencia->fetch(PDO::FETCH_OBJ);
        return $club;
    }

    function editClubDB($club, $id){
        $query = $this->db->prepare("UPDATE clubes SET club = ? WHERE id_club= ?");
        $query->execute(array($club ,$id));
    }
}