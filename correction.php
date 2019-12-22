<?php
session_start();
   
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$id=$_REQUEST['id'];
$Correction=$_REQUEST['Correction'];
$Rectify=$_REQUEST['Rectify'];
$sql="SELECT * from students where id=$id"; 
 
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result)){		  
           
           
			
			//$Officer=($firstname." ".$lastname);
			
			//echo $id;
			//echo $RegNo;
			//$query = "insert into graduands set RegNo = '$RegNo', Faculty  = '$Faculty ',Programme = '$Programme', FullName= '$FullName',
	  //id_no  = '$id_no ', Email='$Email',Tel = '$Tel', Level= '$Level'";
	   $query = "UPDATE students set Correction_Status = 1,Correction='$Correction',Correction_Edit='$Rectify' where id='$id';" ;
	 //echo $query;
	  
	header("Location: dashboard.php"); 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
           }
		  

?>