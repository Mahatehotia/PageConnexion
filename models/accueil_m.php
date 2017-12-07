<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 07/12/17
 * Time: 09:05
 */

class Accueil_m{
    private $db;

    public function __construct(){
        $MaConnexion = new Connexion();
        $this->db = $MaConnexion->connect();
    }
}