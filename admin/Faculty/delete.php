<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM approved WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>