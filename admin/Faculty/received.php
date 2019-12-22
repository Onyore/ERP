<?php
session_start();

include('../../notification.php');
	  $firstname=$_SESSION['firstname'];
	$lastname=$_SESSION['lastname'];
		    
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$id=$_REQUEST['id'];
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
		
		//Auto calc Gown fine	
			$Gown_Fine=0;
$earlier=new DateTime();/////Current date
$later=new DateTime("2020-01-10");
$diff = $later -> diff($earlier)->format("%r%a");

if($diff <= 0)
{
	$diff = 0;
}else
{
	$diff =$diff;
	$Gown_Fine=$diff * 1000;
}
			
		
			//$query = "insert into graduands set RegNo = '$RegNo', Faculty  = '$Faculty ',Programme = '$Programme', FullName= '$FullName',
	  //id_no  = '$id_no ', Email='$Email',Tel = '$Tel', Level= '$Level'";
	   $query = "UPDATE students set Received = 1,Gown_Overdue='$diff',Gown_Fine='$Gown_Fine', Faculty_Officer='$Officer' where RegNo='$RegNo';" ;
	  //echo $query;
	  
	  Create_Notification($con,'email','Gown received,thank you.','Gown Received',$Email,null);
	  
	 header("Location: index.php?school=$Faculty"); 
	 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
           }
		  

?>