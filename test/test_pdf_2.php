<?php

// permet d'inclure la biblioth�que fpdf
require('../fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de cr�er le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// d�finit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte

// Enfin, le document est termin� et envoy� au navigateur gr�ce � Output().
$pdf->Image('../images/image1.jpg',10,10, 64, 48);
$pdf->Cell(40,10,'Voici un Pdf !');

$pdf->Output();

?>