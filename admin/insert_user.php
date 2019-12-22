<?php
 

class uploader {
   public $db;
   private $action;

   public function __construct($dbc=null) {
      // If no database object is passed, create a new db connection
      if( !is_object($dbc) ) {
         $this->db = new mysqli ('localhost', 'root', '', 'gowns');
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
	    $priv = $this->getPostedValue('priv');
	    $school =$this->getPostedValue('school');
        $firstname = $this->getPostedValue('firstname');
        $lastname= $this->getPostedValue('lastname');
	    $idno=$this->getPostedValue('idno');
        $password="welcome";
        $password=md5($password);
        $sql = "insert into admin set firstname='$firstname', lastname= '$lastname',idno='$idno',password='$password', school='$school', priv ='$priv';";
		$result = $this->db->query($sql);
		header("location: superadmin.php");
         
   }
}
$a = new uploader();
$a->doTheUpload();

?>