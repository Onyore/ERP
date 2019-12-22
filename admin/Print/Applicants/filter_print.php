<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','myjustic_Byrent','=X-Y.Byrent.co.ke@1');
mysqli_select_db($con,'myjustic_myjustice');
if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key



$sorted = $_REQUEST['filter'];

}

class PDF extends FPDF {
function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('glogo.png',8,8,27);
		
		 $this->SetFont('Arial','B',19);
	  $this->Cell(250,5,'OFFICE OF THE DEPUTY PRESIDENT',0,0,'C');
      $this->Ln();
	  $this->SetFont('Times','B',19);
      $this->Cell(260,8,'Private Secretary\'s Office',0,0,'C');
	  $this->Ln(20);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(1);
		
		$this->SetFont('Arial','B',10);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(10,10,'Code',1,0,'',true);
			$this->SetFont('Arial','B',13);
		$this->Cell(27,10,'County',1,0,'',true);
		$this->Cell(33,10,'Constituency',1,0,'',true);
		$this->Cell(22,10,'Date',1,0,'',true);
		$this->Cell(39,10,'Big FOUR',1,0,'',true);
		$this->Cell(45,10,'Projects',1,0,'',true);
		
		$this->Cell(90,10,'Activity',1,1,'',true);
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage('L');

$pdf->SetFont('Arial','',11);
$pdf->SetDrawColor(180,180,255);



$query=mysqli_query($con,"SELECT Code, County, Constituency, Date,Big4,Others,Remarks FROM data WHERE Code LIKE '$sorted%' OR County LIKE '$sorted%' OR Constituency
LIKE '$sorted%' OR Date LIKE '$sorted%' OR Big4 LIKE '%$sorted%' OR Others LIKE '$sorted%' OR Remarks LIKE '$sorted%'");
/*
SELECT * FROM `some_table`
WHERE
name = 'expected'
OR rate ='expected' 
OR country ='expected'

SELECT Code, County, Constituency, Date,Big4,Others,Remarks FROM data WHERE Code LIKE '$sorted%' OR County LIKE 'sorted%' OR Constituency
LIKE 'sorted%' OR Date LIKE 'sorted% OR Big4 LIKE 'sorted%' OR Others LIKE 'sorted%' OR Remarks LIKE 'sorted%';
*/


while($data=mysqli_fetch_array($query)){
	$pdf->Cell(10,9,$data['Code'],1,0);
	$pdf->Cell(27,9,$data['County'],1,0);
	$pdf->Cell(33,9,$data['Constituency'],1,0);
	$pdf->Cell(22,9,$data['Date'],1,0);

		$pdf->Cell(39,9,$data['Big4'],1,0);
	if (!empty($data['Othersdef'])) {
	    	$pdf->Cell(45,9,$data['Others'].' - '.$data['Othersdef'],1,0);
	 }else{
	    $pdf->Cell(45,9,$data['Others'].$data['Othersdef'],1,0);
	}
		
		
	
		$pdf->Cell(90,9,$data['Remarks'],1,1);
	
	
	//$pdf->Cell(55,8,$data['Remarks'],1,1);
}

$pdf->Output();

?>
