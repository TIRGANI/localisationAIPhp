<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Connexion {

    private $connextion;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'tp_geolocalisation';
        $login = 'root';
        $password = '';
        try {
            $this->connextion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connextion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnextion() {
        return $this->connextion;
    }

}
?>

