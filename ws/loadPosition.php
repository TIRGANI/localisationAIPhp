<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/PositionService.php';
    showPositions();
}

function showPositions() {
    $cs = new PositionService();
    header('Content-type: application/json');
 echo json_encode($cs->getAll());
   // header('Content-type: application/json');
    //echo json_encode(array("positions" => $cs->getAll()));
}
