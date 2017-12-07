<?php
class User{
    private $instanceModelUser;

    public function __construct(){
        include("models/user_m.php");
        $this->instanceModelUser = new user_m();
    }
    public function index(){
        include "views/header.php";
        include "views/menu.php";
        include "views/footer.php";
    }

    public function connexionUser(){
        include "views/header.php";
        include "views/menu.php";
        include "views/connexion.php";
        include "views/footer.php";
    }
    public function afficherUser(){
        include("views/header.php");
        include("views/menu.php");
        $data=$this->instanceModelUser->getAllUsers();
        include("views/table_user.php");
        include("views/footer.php");
    }

    public function creerUser(){
        include("views/header.php");
        include('views/menu.php');
        include('views/inscription.php');
        include("views/footer.php");
    }

    public function validFormCreerUser(){
        $donnees['prenomUser']=$_POST['prenomUser'];
        $donnees['nomUser']=htmlentities($_POST['nomUser']);
        $donnees['pseudo']=htmlentities($_POST['pseudo']);
        $donnees['motDePasse']=htmlentities($_POST['motDePasse']);
        $donnees['adresseEmail']=htmlentities($_POST['adresseEmail']);
        $donnees['dateInscription']=date("d-m-Y");
        $this->instanceModelUser->insertUnUser($donnees);
        header("Location: ".BASE_URL."index.php/User/afficherUser");
    }

    public function supprimerUser($id=''){
        $this->instanceModelUser->deleteUnUser($id);
        header("Location: ".BASE_URL."index.php/User/afficherUser");
    }
    public function modifierUser($id='')
    {
        include("views/header.php");
        include("views/menu.php");
        $donnees=$this->instanceModelUser->lireUnUser($id);
        include("views/form_update_user.php");
        include("views/footer.php");
    }

    public function validFormModifierUser(){
        $donnees['prenomUser']=htmlentities($_POST['prenomUser']);
        $donnees['nomUser']=htmlentities($_POST['nomUser']);
        $donnees['pseudo']=htmlentities($_POST['pseudo']);
        $donnees['motDePasse']=htmlentities($_POST['motDePasse']);
        $donnees['adresseEmail']=htmlentities($_POST['adresseEmail']);
        $donnees['dateInscription']=htmlentities($_POST['dateInscription']);
        $donnees=$this->instanceModelUser->updateUnUser($id,$donnees);
        header("Location: ".BASE_URL."index.php/User/afficherUser");
    }

}