<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'gowns');
if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key



$sorted = $_REQUEST['filter'];

}

class PDF extends FPDF {
function Header(){
		$this->SetFont('Arial','B',25);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('logo.png',8,8,27);
		
		 $this->SetFont('Arial','B',29);
	  $this->Cell(250,5,'KISII UNIVERSITY',0,0,'C');
      $this->Ln();
	  $this->SetFont('Times','B',23);
      $this->Cell(265,12,'Certificate(Pending Finance)',0,0,'C');
	  $this->Ln(20);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(1);
		
		$this->SetFont('Arial','B',10);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		
		$this->Cell(31,10,'Reg. No.',1,0,'',true);
		$this->Cell(60,10,'Full Names',1,0,'',true);
		$this->Cell(137,10,'School',1,0,'',true);
		
		
		
		$this->Cell(45,10,'Level',1,1,'',true);
		
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

$query=mysqli_query($con,"SELECT * FROM Students where Received=1 AND Finance_Status=0");


while($data=mysqli_fetch_array($query)){
	$School=$data['Faculty'];
	//echo $school;
	if($School==1){
	$School="SCHOOL OF BUSINESS AND ECONOMICS";
}
elseif($School==2){
	$School="SCHOOL OF LAW";
}
elseif($School==3){
	$School="INFORMATION SCIENCES AND TECHNOLOGY";
}
elseif($School==4){
	$School="SCHOOL OF HEALTH SCIENCES ";
}
elseif($School==5){
	$School="AGRICULTURE AND NATURAL RESOURCE MANAGEMENT";
}
elseif($School==6){
	$School="SCHOOL OF ARTS AND SOCIAL SCIENCES";
}
elseif($School==7){
	$School="EDUCATION AND HUMAN RESOURCES ";
}
elseif($School==8){
	$School="NAIROBI CAMPUS";
}
elseif($School==9){
	$School="KERICHO CAMPUS";
}
elseif($School==10){
	$School="ELDORET CAMPUS";
}
elseif($School==11){
	$School="KAPENGURIA CAMPUS";
}
elseif($School==11){
	$School="MIGORI CAMPUS";
}


else{
	$School="SCHOOL OF PURE AND APPLIED SCIENCES";
}
	
	$pdf->Cell(31,9,$data['RegNo'],1,0);
	$pdf->Cell(60,9,$data['FullName'],1,0);
	$pdf->Cell(137,9,$School,1,0);
	
	

		
	//if (!empty($data['id_no'])) {
	    	//$pdf->Cell(45,9,$data['Phone'].' - '.$data['Phone'],1,0);
	// }else{
	  //  $pdf->Cell(45,9,$data['Email'].$data['Email'],1,0);
	//}
		
		
	
		$pdf->Cell(45,9,$data['Level'],1,1);
	
	
	//$pdf->Cell(55,8,$data['Remarks'],1,1);
}

$pdf->Output();

?>
