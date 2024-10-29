<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <link rel= stylesheet href="css/cssGeneral.css"/>
        <title></title>
    </head>
    <body id="body">
        <?php
            if(!isset($_REQUEST['action']))
            $action = 'accueil';
            else
            $action = $_REQUEST['action'];
            // vue qui crée l?en-tête de la page
            include("vues/v_entete.php") ;
            
            switch($action)
            {
                case 'accueil':                    
                    include("vues/v_accueil.php");
                    break;
                case 'voirCours':
                    include("modele/fonctions.php");
                    $lesCours = getLesCours();
                    include("vues/v_cours.php");
                    break;
                case 'inscrire':
                    include("modele/fonctions.php");
                    $numero = inscrireCours();
                    include("vues/v_formulaireInscription.php");
                    break;
                case 'validerInscription':
                    include("modele/fonctions.php");
                    $numero = inscrireCours();
                    $inscription = validerInscription();
                    creerInscriptions($inscription);
                    include("vues/v_confirmeInscription.php");
                    break;
                case 'voirInscriptions':
                    include("modele/fonctions.php");
                    $lesInscriptions = getLesInscriptions();
                    include("vues/v_inscriptions.php");
                    break;
                case 'pdfInscription':
                    include("modele/fonctions.php");
                    $lesInscriptions = getLesInscriptions();
                    $numero=$_REQUEST['numInscription'];
                    $inscription = $lesInscriptions[$numero];
                    include("vues/v_pdf_Inscription.php");
                    $res = creerPdfInscription($inscription);
                    break;
                case 'supprimer':
                    include('modele/fonctions.php');
                    $sup = delete();
                    $lesInscriptions = getLesInscriptions();
                    include('vues/v_inscriptions.php');
            }
            // vue qui crée le pied de page
            include("vues/v_pied.php") ;
        ?>
    </body>
</html>
