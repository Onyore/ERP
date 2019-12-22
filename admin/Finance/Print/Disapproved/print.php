<?php
require('fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=myjustic_myjustice','myjustic_Byrent','=X-Y.Byrent.co.ke@1');

class myPDF extends FPDF
{
  function Header()
    {
      $this->Image('glogo.jpg',6,6);
      $this->SetFont('Arial','B',27);
	  $this->Cell(275,5,'OFFICE OF THE DEPUTY PRESIDENT',0,0,'C');
      $this->Ln();
	  $this->SetFont('Times','B',22);
      $this->Cell(278,20,'Private Secretary\'s Office',0,0,'C');
	  $this->Ln(20);
     }

  function footer()
    {
      $this->SetY(-15);
      $this->SetFont('Arial','',8);
	  $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	  
    }
	function headerTable(){
		$this->SetY(-150);
      $this->SetFont('Times','B',12);
	  $this->Cell(10,10,'ID',1,0,'C');
	  $this->Cell(30,10,'County',1,0,'C');
	  $this->Cell(10,10,'Code',1,0,'C');
	  $this->Cell(40,10,'Constituency',1,0,'C');
	  $this->Cell(15,10,'Date',1,0,'C');
	  $this->Cell(50,10,'Big Four',1,0,'C');
	  $this->Cell(50,10,'Other Agenda',1,0,'C');
	  $this->Cell(30,10,'Sub Agenda',1,0,'C');
	  $this->Cell(40,10,'Remarks',1,0,'C');
      $this->Ln ();
	}
	function viewTable($db){
		
      $this->SetFont('Times','',12);
	 
	  $this->Cell(10,10,'ID',1,0,'L');
	  $this->Cell(30,10,'County',1,0,'L');
	  $this->Cell(10,10,'Code',1,0,'L');
	  $this->Cell(40,10,'Constituency',1,0,'L');
	  $this->Cell(15,10,'Date',1,0,'L');
	  $this->Cell(50,10,'Big Four',1,0,'L');
	  $this->Cell(50,10,'Other Agenda',1,0,'L');
	  $this->Cell(30,10,'Sub Agenda',1,0,'L');
	  $this->Cell(40,10,'Remarks',1,0,'L');
      $this->Ln ();
	
}
}

$pdf=new myPDF();
//$pdf=AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output('ps.pdf','D');
?>
