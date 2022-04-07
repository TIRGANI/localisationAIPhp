<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/PositionService.php';
    create();
}

function create() {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $date = $_POST['date'];
    $imei = $_POST['imei'];
    $ss = new PositionService();
    $ss->create(new Position(1, $latitude, $longitude, $date, $imei));
    header('Content-type: application/json');
    echo json_encode($ss->getAll());
}
