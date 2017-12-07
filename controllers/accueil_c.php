<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 07/12/17
 * Time: 09:05
 */

class Accueil{

    private $instanceModelAccueil;

    public function __construct(){
        include("models/accueil_m.php");
        $this->instanceModelAccueil = new accueil_m();
    }
    public function index(){
        include "views/header.php";
        include "views/menu.php";
        include "views/accueil.php";
        include "views/footer.php";
    }
}