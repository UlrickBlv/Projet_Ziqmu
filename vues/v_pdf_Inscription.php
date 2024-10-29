<?php
function creerPdfInscription($inscription){
   // $nom = utf8_decode($inscription['nom']);
   // $prenom = utf8_decode($inscription['prenom']);
    require('fpdf/fpdf.php');

    // instancie un objet de type FPDF qui permet de créer le PDF
    $pdf=new FPDF();
    //$pdf->SetFillColor(0,255,0);
    // ajoute une page
    $pdf->AddPage();
    // définit la police courante
    $pdf->SetFont('Arial','B',16);  
   
    $pdf->Image('images/image1_1.jpg',50,100,100,100);
   // $pdf->Cell(10,210,"Client :".$nom." ".$prenom);
    $pdf->Cell(5,5,"NOM :".$inscription['nom']);
    $pdf->Ln(5);
    $pdf->Cell(5,5,"PRENOM :".$inscription['prenom']);
    $pdf->Ln(5);
    $pdf->Cell(5,5,"Numero du cours :".$inscription['idCour']);
    $pdf->Ln(5);
    $pdf->Cell(5,5,"Adresse mail  :".$inscription['mail']);
    $pdf->Ln(5);
    $pdf->Cell(5,5,"Telephone  :".$inscription['Telephone']);
    $pdf->Ln(5);
    $pdf->Cell(100,100,'Voici votre Billet pour le cour N*:'.$inscription['idCour']);
    
    ob_end_clean();
    $pdf->Output();
}
?>