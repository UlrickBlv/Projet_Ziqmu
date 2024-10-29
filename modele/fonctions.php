<?php
    function getLesCours(){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO ('mysql:host=localhost;dbname=Projet_Projet_Ziqmu','root','',$pdo_options);
        $reponse = $bdd->query('SELECT * FROM cour');
        $tab = array();
        while ($donnees = $reponse->fetch())
        {
            $lesCours[] = $donnees;
        }
        $reponse->closeCursor();        
        return ($lesCours);
    }
    
    function inscrireCours(){
        $numero = $_REQUEST['numero'];
        return $numero;
    }
    
    function validerInscription(){
        $inscription = array();
        // récupération du numéro
        $numero = $_REQUEST["numero"];
        $inscription["numero"] =$numero;
        $nom = $_REQUEST["nom"];
        $inscription["nom"] = $nom;
        $prenom = $_REQUEST["prenom"];
        $inscription["prenom"] = $prenom;
        $adresse = $_REQUEST["adresse"];
        $inscription["adresse"] = $adresse;
        $mail = $_REQUEST["mail"];
        $inscription["mail"] = $mail;
        //$idInscription = $_REQUEST["idInscription"];
        //$inscription["idInscription"] = $idInscription;
        //$idAdherent = $_REQUEST["idAdherent"];
        //$inscription["idAdherent"]=$idAdherent;
        return ($inscription);
    }
    
    // fonction qui initialise le panier
    // le panier est un tableau indexé mis en session avec la clé "inscriptions"
    function initPanier(){
        if(!isset($_SESSION['inscriptions']))
	$_SESSION['inscriptions']= array();        
    }

    // fonction qui ajoute une réservation au panier
    function ajouterAuPanier($inscription){    
        $_SESSION['inscriptions'][]= $inscription;
    }
    
    function creerInscriptions($inscription){
          $bdd = new PDO ('mysql:host=localhost;dbname=Projet_Projet_Ziqmu','root','root',$pdo_options);
        // require dirname(__FILE__). "/connect.php";
        // ouverture du fichier en écriture (mode w)  
        $nom = $inscription['nom'];
        $prenom = $inscription['prenom'];
        $adresse = $inscription['adresse'];
        $mail = $inscription['mail'];
        $idCour = $inscription['numero'];    
    
        if($bdd){
            $requete="INSERT INTO `adherent` (`idAdherent`, `nom`, `prenom`, `Telephone`, `adresse`, `mail`) 
                     VALUES (null,:nom,:prenom,'',:adresse,:mail)";
            $req =$bdd->prepare($requete);
            $req->execute(array("nom"=>$nom,"prenom"=>$prenom,"adresse"=>$adresse,"mail"=>$mail));
       
            $requete2 = "select max(idAdherent) as newAdherent from adherent";
            $res = $bdd->query($requete2);
            $ligne = $res->fetch();
            $idAdherent = $ligne['newAdherent'];           
           
            $requete3 = $bdd->prepare ("INSERT INTO `inscrit` (`idCour`, `idAdherent`, `nom`, `prenom`, `adresse`,`mail`, `Telephone`, `idInscription`) 
                    VALUES (:idCour, :idAdherent, :nom, :prenom, :adresse,:mail,'', null)");
            $requete3->execute(array("idCour"=>$idCour,"idAdherent"=>$idAdherent,"nom"=>$nom,"prenom"=>$prenom,"adresse"=>$adresse,"mail"=>$mail));
        }
    }

    function getLesInscriptions(){
        $bdd = new PDO ('mysql:host=localhost;dbname=Projet_Projet_Ziqmu','root','');
        $reponse = $bdd->query('SELECT * FROM inscrit');
        $tab = array();
        while ($donnees = $reponse->fetch())
        {
            $lesInscriptions[] = $donnees;
        }
        $reponse->closeCursor();
        
        return ($lesInscriptions);
    }
    
    function getInscription(){
        $bdd = new PDO ('mysql:host=localhost;dbname=Projet_Projet_Ziqmu','root','',$pdo_options);
        $requete = $bdd->query("select * from inscrit ");
        $tab = array();
        while ($donnees = $requete->fetch())
        {
            $lesReservations[] = $donnees;
        }
        $requete->closeCursor();
        
        return ($lesReservations);
        
    }
    function delete(){
     $bdd = new PDO ('mysql:host=localhost;dbname=Projet_Projet_Ziqmu','root','');
     /* $requete1=("SELECT `idAdherent` FROM `adherent` ");
      $res = $bdd->query($requete1);
      $ligne = $res->fetch();
      $idAdherent = $ligne['newdiAdherent'];
      $requete2= $bdd->prepare("delete from adherent JOIN inscrit ON adherent.idAdherent = inscrit.idAdherent where idAdherent=$idAdherent");
      $rrequete2->execute($requete2);
      return $res;*/
      $requete="delete from adherent where nom=$nom";
      $resulat = $bdd->query($requete);
    }
?>
