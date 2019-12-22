<?php
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
       $idno = $this->getPostedValue('idno');
       $password=$this->getPostedValue('password');
	   
      $password=md5($password);
      //$sql="SELECT * FROM users WHERE Username='".$Username."' AND Password='".$Password."'";
	  $sql="SELECT * FROM admin WHERE idno='".$idno."' AND password='$password'";
	  //echo $sql;
	  $error = "Wrong password/Id Number(Contact the ICT manager)";
//$result=mysqli_query($sql);
     $result = $this->db->query($sql);
	 $row=mysqli_fetch_assoc($result);
	$firstname = $row["firstname"];
	$lastname= $row["lastname"];
	$school=$row["school"];
	$priv=$row["priv"];
	$Update_pass=$row["Update_Pass"];
	
	 
	 //echo $priv;
	 if(mysqli_num_rows($result)==1){
$_SESSION['idno']=$idno;
$_SESSION['priv']=$priv;
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;

if($Update_pass==1 && $priv == 4)
{
	header("location: superadmin.php");
}
elseif($Update_pass==1 && $priv == 3){
	//$_SESSION['school']=$school;
	header("location: academic.php");
}
elseif($Update_pass==1 && $priv == 2){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Finance/index.php");
}
elseif($Update_pass==1 && $priv == 1){
	
	$_SESSION['firstname']=$firstname;
	$_SESSION['school']=$school;
	$_SESSION['lastname']=$lastname;
	header("location: Faculty/index.php?school=$school");
}
elseif($Update_pass==1 && $priv == 5){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Library/index.php");
}
elseif($Update_pass==1 && $priv == 6){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: CashOffice/index.php");
}
elseif($Update_pass==1 && $priv == 7){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: AA/index.php");
}
elseif($Update_pass==1 && $priv == 8){
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	header("location: Issuance/index.php");
}
else{
	$_SESSION['id']=$idno;
	header("location: update_password.php?id=$id");
}
	  } else{
	
	 $_SESSION["error"] = $error;
	 //echo $password;
	header("location: index.php");

 
 
//header("location: index.php");

}
   }
   }
$a = new uploader();
$a->doTheUpload();

?>