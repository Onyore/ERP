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
		 $RegNo=$_SESSION['RegNo'];
      }
   }

   //_______________________________________________________________________________________________________________________________________
   public function getPostedValue($fieldName){
      if (isset($_POST[$fieldName])){
         $s = $_POST[$fieldName];
      }
      else {
         $s = '';
      }
      return $s;
   }

   //__________________________________________________________________________________________________________________
   public function doTheUpload(){
	   $RegNo = $this->getPostedValue('RegNo');
      $cert_no = $this->getPostedValue('cert_no');
      $congregation_no= $this->getPostedValue('congregation_no');
	     $graduation_no= $this->getPostedValue('graduation_no');
		    $Email= $this->getPostedValue('Email'); 
			   $Tel = $this->getPostedValue('Tel');
			   $postal= $this->getPostedValue('postal');
			   $residence = $this->getPostedValue('residence');
			  
			      echo $RegNo;
      $sql = "UPDATE students set cert_no = '$cert_no', congregation_no = '$congregation_no',graduation_no= '$graduation_no', Email= '$Email',
	  Tel  = '$Tel',postal = '$postal',residence = '$residence',Update_count=1 where RegNo='$RegNo';" ;
	  
	 //echo $sql;
	 header("location: Profile.php");
      $result = $this->db->query($sql);
   }
   

}

$a = new uploader();
$a->doTheUpload();
?>