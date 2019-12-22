<?php
session_start();

	  $firstname=$_SESSION['firstname'];
	$lastname=$_SESSION['lastname'];
	$id=$_SESSION['id'];
		    
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$id=$_REQUEST['id'];
$sql="SELECT * from students where id=$id"; 
 
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result)){		  
           
           
			$RegNo=$row['RegNo'];
			$Faculty=$row['Faculty'];
			$Programme=$row['Programme'];
			$FullName=$row['FullName'];
			$id_no=$row['id_no'];
			$Email=$row['Email'];
			$Tel=$row['Tel'];
			$Level=$row['Level'];
			$Officer=($firstname." ".$lastname);
			
			
		
			//$query = "insert into graduands set RegNo = '$RegNo', Faculty  = '$Faculty ',Programme = '$Programme', FullName= '$FullName',
	  //id_no  = '$id_no ', Email='$Email',Tel = '$Tel', Level= '$Level'";
	   $query = "UPDATE students set Confirm_Status = 1 where RegNo='$RegNo';" ;
	  //echo $query;
	  
	 header("Location: dashboard.php"); 
	 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
           }
		  

?>