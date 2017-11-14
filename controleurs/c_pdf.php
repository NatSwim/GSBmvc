<?php

require('../vues/pdf/fpdf.php');   

class PDF extends FPDF
{


function Header()
{
       
    $this->Image('../images/logogsb.jpg',10,6,30);
     //$total = $_POST['total'] ;
    $this->Cell(130 );
    $this->SetFont('Arial','B',15);

    $this->Cell(30,10,'F I C H E   D E   F R A I S',0,0,'C');
    $this->Ln(20);
    $this->SetFont('Arial','',12);

    //$txt = file_get_contents('20k_c1.txt');

    $this->MultiCell(0,7,"Elements Frais Forfaits",'L');


    $this->SetFont('Arial','',12);

       
    $this->Ln(10);

}

function Footer(){
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Arial italique 8
    $this->SetFont('Arial','I',8);
    // Couleur du texte en gris
    $this->SetTextColor(128);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');

}

function FancyTable($header){
    $id = $_GET['id'] ;
$mois = $_GET['mois'] ;
$FF = $_GET['ff'];
$infosFraisForfait = unserialize($FF);
$FH = $_GET['fh'] ;
$FraisHorsForfait = unserialize($FH);
    // Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(206, 206, 206);
    $this->SetTextColor(0);
    $this->SetDrawColor(0, 0, 0);
    $this->SetLineWidth(.3);
    $this->SetFont('Helvetica','B','10');
    // En-tête

    $w = array(70, 45, 65);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauration des couleurs et de la police
    $this->SetFillColor(255, 255, 255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',9);
    // Données
   $fill = false;
         foreach ( $infosFraisForfait as $unFraisForfait ) 
         {
            $this->Cell($w[0],6,$unFraisForfait['libelle'],'L',0,'C',$fill);
            $this->Cell($w[1],6,$unFraisForfait['quantite'],'',0,'C',$fill);
            $this->Cell($w[2],6,$unFraisForfait['montant'],'R',0,'C',$fill);
            $this->Ln();
        $fill = !$fill;
        }

 
    // Trait de terminaison
    $this->Cell(array_sum($w),0,'','T');
    


    $this->SetFont('Arial','',12);
$this->Ln(5);
    $this->Cell(1,7,"Elements Hors Forfaits",'L');
    $this->Ln(20);



}

function FancyTable2($head){
    $id = $_GET['id'] ;
$mois = $_GET['mois'] ;
$FH = $_GET['fh'] ;
$infosFraisHors = unserialize($FH);
    // Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(206, 206, 206);
    $this->SetTextColor(0);
    $this->SetDrawColor(0, 0, 0);
    $this->SetLineWidth(.3);
    $this->SetFont('Helvetica','B','10');
    // En-tête
    $w2 = array(70, 45, 65);
    for($i=0;$i<count($head);$i++)
        $this->Cell($w2[$i],7,$head[$i],1,0,'C',true);
    $this->Ln();
    // Restauration des couleurs et de la police
    $this->SetFillColor(255, 255, 255);
    $this->SetTextColor(0);
    $this->SetFont('Arial','',9);
    // Données
   $fill = false;
    foreach ( $infosFraisHors as $unFraisHorsForfait ) 
          {
            $this->Cell($w2[0],6,$unFraisHorsForfait['date'],'L',0,'C',$fill);
            $this->Cell($w2[1],6,$unFraisHorsForfait['montant'],'',0,'C',$fill);
            $this->Cell($w2[2],6,$unFraisHorsForfait['libelle'],'R',0,'C',$fill);
            $this->Ln();
        $fill = !$fill;
          }

    
    // Trait de terminaison
    $this->Cell(array_sum($w2),0,'','T');


}


}

$pdf = new PDF();
$titre = 'Facturation';
$header = array('Libelle', 'Quantite', 'Montant');
$head = array('Date', 'Libelle', 'Montant');

$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header);
$pdf->FancyTable2($head);
$pdf->Output();
?>