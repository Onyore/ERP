<?php
//$idno=35780150;
class uploader {
   public $db;
   private $action;

   public function __construct($dbc=null) {
      // If no database object is passed, create a new db connection
      if( !is_object($dbc) ) {
         
         $this->db = new mysqli('localhost', 'root', '', 'gowns');
         if ( mysqli_connect_errno() ) {
           return $this->error("DB Connection Error: ". mysqli_connect_error());
         }
      }
      // else assign the connection object to the passed connection
      else {
         $this->db = $dbc;
      }
      // If the session is not started yet
      if( !isset($_SESSION) ) {
         session_start();
      }
   }

   //_______________________________________________________________________________________________________________________________________
   public function getPostedValue($fieldName){
      if (isset($_POST[$fieldName])){
         $s =$_POST[$fieldName];
      }
      else {
         $s = '';
      }
      return $s;
   }

   //__________________________________________________________________________________________________________________
   public function doTheUpload(){
       $password = $this->getPostedValue('password');
       //$password2=$this->getPostedValue('password2');
   
	   require('db.php');
//include("auth.php");
//$idno=35780150;
$idno=$_SESSION['idno'];
$query = "SELECT * from admin where idno='".$idno."'"; 

$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$firstname = $row["firstname"];
$lastname= $row["lastname"];
$school=$row["school"];
$priv=$row["priv"];
//$password1=$row["password"];

//echo $Status;
        
$password=md5($password);
      //$sql="SELECT * FROM users WHERE Username='".$Username."' AND Password='".$Password."'";
	  $sql="UPDATE admin set password = '$password', Update_Pass=1 where idno='$idno';";
	  
	  //echo $idno;
	 
	  

if($priv == 4){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: superadmin.php");
}
elseif($priv == 5){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Library/index.php");
}
elseif($priv == 6){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: CashOffice/index.php");
}
elseif($priv == 7){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: AA/index.php");
}
elseif($priv == 3){
	
	$_SESSION['school']=$school;
	header("location: academic.php");
}
elseif($priv == 2){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Finance/index.php");
}
elseif($priv == 1){
	
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Faculty/index.php?school=$school");
}
elseif($priv == 8){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Issuance/index.php");
}
else{
	header("location: index.php");
}

	  //$error = "Passwords do not match";
//$result=mysqli_query($sql);
     $result = $this->db->query($sql);
	

}

}
$a = new uploader();
$a->doTheUpload();


?>