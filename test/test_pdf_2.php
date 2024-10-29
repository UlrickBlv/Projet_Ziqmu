<?php

// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte

// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Image('../images/image1.jpg',10,10, 64, 48);
$pdf->Cell(40,10,'Voici un Pdf !');

$pdf->Output();

?>