<?php
//include('db.php');
function Create_Notification($con,$channel='email',$message=NULL,$subject=null,$email=null,$phone=null){
	
	$sql="INSERT INTO notifications (`channel`,`message`,`subject`,`email`,`phone`) values (\"$channel\",\"$message\",\"$subject\",\"$email\",\"$phone\")";
	 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	
		
	
}


?>