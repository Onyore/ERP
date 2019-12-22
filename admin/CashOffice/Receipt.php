<?php
session_start();
$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
   
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$id=$_REQUEST['id'];
$Receipt=$_REQUEST['Receipt'];
//$id=$_SESSION['id'];
$sql="SELECT * from students where id=$id"; 
 
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result)){		  
           
           
			
			$Officer=($firstname." ".$lastname);
			
			//echo $id;
			//echo $RegNo;
			//$query = "insert into graduands set RegNo = '$RegNo', Faculty  = '$Faculty ',Programme = '$Programme', FullName= '$FullName',
	  //id_no  = '$id_no ', Email='$Email',Tel = '$Tel', Level= '$Level'";
$query = "UPDATE students set Cash_Status=1,Receipt_No='$Receipt',Cash_Officer='$Officer',Library_Reason=0,Transcript_Fee=0,
        Library_Status=1,Gown_Fine=0 where id='$id';" ;
	 // echo $Officer;
	  
	 header("Location: index.php"); 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
           }
		  

?>