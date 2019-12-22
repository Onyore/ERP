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
       $Level = $this->getPostedValue('Level');
       $RegNo=$this->getPostedValue('RegNo');
	   $id_no=$this->getPostedValue('id_no');
        
//$Password=md5($Password);
      //$sql="SELECT * FROM users WHERE Username='".$Username."' AND Password='".$Password."'";
	  $sql="SELECT * FROM students WHERE RegNo='".$RegNo."' AND id_no='".$id_no."'";
	  //echo $sql;
	  $error = "Registration number/password incorrect<br>
	  (contact gowns@kisiiuniversity.ac.ke)";
//$result=mysqli_query($sql);
     $result = $this->db->query($sql);
	 if(mysqli_num_rows($result)==1){
$_SESSION['RegNo']=$RegNo;
$_SESSION['Level']=$Level;

//header("location: update.php?RegNo=$RegNo");
header("location: update.php");
}
else{
//$_SESSION['logged']=FALSE;
 $_SESSION["error"] = $error;
echo $error;
header("location: index.php");
}
}
}
$a = new uploader();
$a->doTheUpload();

?>