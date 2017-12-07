<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 05/12/17
 * Time: 16:05
 */

class User_m{
    private $db;

    public function __construct(){
        $MaConnexion = new Connexion();
        $this->db = $MaConnexion->connect();
    }

    function getAllUsers(){
        $requete="SELECT * FROM utilisateurs;";
        try {
            $select = $this->db->query($requete);
            $results = $select->fetchAll();
            return $results;
        }
        catch ( Exception $e ) {
            echo "Erreur methode getAllUsers : ", $e->getMessage();
        }
    }

    function insertUnUser($donnees){
        //$requete="INSERT INTO utilisateurs(prenomUser,nomUser,pseudo,motDePasse,adresseEmail,dateInscription) VALUES
    	//('".$donnees['prenomUser']."','".$donnees['nomUser']."',".$donnees['pseudo'].",'".$donnees['motDePasse']."','".$donnees['adresseEmail']."','".$donnees['dateInscription']."');";
        //$this->db->exec($requete);

        $requete="INSERT INTO utilisateurs(prenomUser,nomUser,pseudo,motDePasse,adresseEmail,dateInscription) VALUES 
                  (:prenomUser,:nomUser,:pseudo,:motDePasse,:adresseEmail,:dateInscription);";
     	try {
    		$prep=$this->db->prepare($requete);
    		$prep->bindParam(':prenomUser',$donnees['prenomUser']);
    		$prep->bindParam(':nomUser',$donnees['nomUser']);
    		$prep->bindParam(':pseudo',$donnees['pseudo']);
    		$prep->bindParam(':motDePasse',$donnees['motDePasse']);
            $prep->bindParam(':adresseEmail',$donnees['adresseEmail']);
            $prep->bindParam(':dateInscription',$donnees['dateInscription']);
			$prep->execute();

			}
		catch ( Exception $e ) {
				echo "Erreur methode insertUnUser : ", $e->getMessage();
			}
    }

    function deleteUnUser($id){
        $requete="DELETE
		FROM utilisateurs WHERE id=".$id." LIMIT 1;";
        try {
            $nbRes = $this->db->exec($requete);
            return $nbRes;
        }
        catch ( Exception $e ) {
            echo "Erreur methode lireUnUser : ", $e->getMessage();
        }
    }

    function lireUnUser($id){
        $requete="SELECT *
		FROM utilisateurs WHERE id=:id LIMIT 1;";
        try {
            $prep=$this->db->prepare($requete);
            $prep->bindParam(':id',$id,PDO::PARAM_INT);
            $prep->execute();
            $result = $prep->fetch();
            return $result;
        }
        catch ( Exception $e ) {
            echo "Erreur methode lireUnUser : ", $e->getMessage();
        }
    }
    function updateUnUser($id,$donnees){
        $requete="UPDATE utilisateurs SET 
        prenomUser=".$donnees['prenom']." ,
    	nomUser='".$donnees['nom']."', 
    	pseudo='".$donnees['pseudo']."' ,
    	motDePasse=".$donnees['motDePasse']." ,
    	adresseMail='".$donnees['adresseMail']."', 
    	WHERE id=".$id.";";
        try {
            $nbRes = $this->db->exec($requete);
        }
        catch ( Exception $e ) {
            echo "Erreur methode updateUnUser : ", $e->getMessage();
        }
    }

}

 ?>