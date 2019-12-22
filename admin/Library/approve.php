<?php
session_start();
$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
   
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$id=$_REQUEST['id'];
$sql="SELECT * from students where id=$id"; 
 
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result)){		  
           
           
			
			$Officer=($firstname." ".$lastname);
			
			//echo $id;
			//echo $RegNo;
			//$query = "insert into graduands set RegNo = '$RegNo', Faculty  = '$Faculty ',Programme = '$Programme', FullName= '$FullName',
	  //id_no  = '$id_no ', Email='$Email',Tel = '$Tel', Level= '$Level'";
	   $query = "UPDATE students set Library_Status = 1,Library_Officer='$Officer' where id='$id';" ;
	 // echo $Officer;
	  
	 header("Location: index.php"); 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
           }
		  

?>