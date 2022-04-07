<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../dao/IDao.php';
include_once '../classes/Position.php';
include_once '../connexion/Conexion.php';

class PositionService implements IDao {

    private $listPosition = array();
    private $connexion;
    private $position;

    public function __construct() {
        $this->connexion = new Connexion();
        $this->position = new Position("", "", "", "", "");
    }

    public function create($position) {
        $query = "INSERT INTO position (latitude, longitude, date, imei) VALUES ("
                . $position->getLatitude() . "," . $position->getLongitude() . ",'" . $position->getDate() . "','" . $position->getImei() . "');";
        $req = $this->connexion->getConnextion()->prepare($query);
        $req->execute() or die('SQL');
    }

    public function delete($obj) {
        
    }

    public function getAll() {

        $query = "select * from position";
        $req = $this->connexion->getConnextion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($obj) {
        
    }

    public function update($obj) {
        
    }

}
