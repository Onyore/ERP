<?php
session_start();

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
$id=$_SESSION['id'];

//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students WHERE id='$id'";
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
	$FullName=$row['FullName'];
	$RegNo=$row['RegNo'];
	$id_no=$row['id_no'];
	$School=$row['Faculty'];
	$Programme=$row['Programme'];
	//$Option=$row['Option'];
	//$Admisssion_Date=$row['Admisssion_Date'];
	//$Graduation_Year=$row['Graduation_Year'];
	//$Cumulative=$row['Cumulative'];
	$congregation_no=$row['congregation_no'];
	$graduation_no=$row['graduation_no'];
	$postal=$row['postal'];
	$Tel=$row['Tel'];
	
	
if($School==1){
	$School="SCHOOL OF BUSINESS AND ECONOMICS";
}
elseif($School==2){
	$School="SCHOOL OF LAW";
}
elseif($School==3){
	$School="SCHOOL OF INFORMATION SCIENCES AND TECHNOLOGY";
}
elseif($School==4){
	$School="SCHOOL OF HEALTH SCIENCES ";
}
elseif($School==5){
	$School="SCHOOL OF AGRICULTURE AND NATURAL RESOURCE MANAGEMENT";
}
elseif($School==6){
	$School="SCHOOL OF ARTS AND SOCIAL SCIENCES";
}
elseif($School==7){
	$School="SCHOOL OF EDUCATION AND HUMAN RESOURCES ";
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
elseif($School==12){
	$School="MIGORI CAMPUS";
}
elseif($School==13){
	$School="SCHOOL OF PURE AND APPLIED SCIENCES";
}
else{
	$School="KISII UNIVERSITY";
}
	
}




// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Byrent Chumo');
$pdf->SetTitle('Clearance Download');
$pdf->SetSubject('Kisii University');
$pdf->SetKeywords('Earnest Okiya');


// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

/* set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
*/
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content

$html = '
<p align="right"><b>KSU/RAA/CRFA</b></p>
<p align="center"><img src="images/logo.png" alt="logo" align="center" style="width:100px; height: 70px;margin-left:50%;">
</p>  
   <h2 align="center"><b>KISII UNIVERSITY</b></h2>
   <p align="center"><strong>OFFICE OF THE ACADEMIC REGISTRAR</strong></p>
  <p> <table><tr><td align="left"><small>Phone: 0720 875 082</small></td><td align="right"><small>P.O BOX 408-40200</small></td></tr>
  <tr><td align="left"><small>Email: acregistrar@kisiiuniversity.ac.ke</small></td><td align="right"><small>KISII-KENYA</small> </td></tr></table></p>
   
 <h3>TRANSCRIPT RELEASING FORM</h3>
<h4>A. STUDENT DETAILS</h4>

<p><b>NAME:</b>        '.$FullName.' </p>
<br>

<p><b>NATIONAL ID NO:</b>       '.$id_no.'   <b>                       </b>   <b>REG NO: </b>        '.$RegNo.'   </p>
                                
<br>
<p><b>SCHOOL:</b>       '.$School.'  </p>
<br>

<p><b>PROGRAMME:     </b>'.$Programme.' </p>
<br>
<p><b>OPTION TAKEN:     </b>'.$Programme.' </p>
<br>
<p><b>Date of Admission: </b>     01/09/2015<b>                       </b> <b>GRADUATION DATE:     </b> 20th December, 2019</p>
<br>
<p><b>Final Cummulative/Average(%); </b>    65% </p> 
<p><b>CONGREGATION NUMBER:</b>      '.$congregation_no.'    <b>                       </b> <b>NUMBER ON GRADUATION LIST:</b>       '.$graduation_no.'</p>
<br>

<br>
<p><b>Transcript  details (Tick if applicable) </b> </p>
<p>[  ] Transcript is without erasure or mark         [  ] Transcript is without typing errors </p>

<p> [  ] I certify that the above information is correct to the best of my knowledge and I have collected my degree/diploma transcript.</p>

<h4>	Contact Details</h4>
<p>Box:......................................... Code:................................................ Telephone:.........................................</p>
<p> Student Signature:..............................................   Date:......................................................................</p>

<h4> For Official Use Only</h4>
<p> Date of Print:...................................................</p>
<p> Registrar Name:............................................... Signature:..................Issue Date:..................</p>';


// output the HTML content


// reset pointer to the last page
//$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page
//$pdf->AddPage();

// create some HTML content


// reset pointer to the last page
//$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print all HTML colors

// add a page
//$pdf->AddPage();



// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// test pre tag

// add a page
//$pdf->AddPage();



// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// test custom bullet points for list

// add a page
//$pdf->AddPage();



// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
//$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Transcript_clearance.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
