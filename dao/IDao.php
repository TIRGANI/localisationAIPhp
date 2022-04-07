<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IDao {

    public function create($obj);

    public function update($obj);

    public function delete($obj);

    public function getById($obj);

    public function getAll();
}
