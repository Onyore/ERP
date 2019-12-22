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
        
//$Password=md5($Password);
      //$sql="SELECT * FROM users WHERE Username='".$Username."' AND Password='".$Password."'";
	  $sql="SELECT * FROM admin WHERE idno='".$idno."' AND password='".$password."'";
	  //echo $sql;
	  $error = "Your IdNo/Password incorrect<br>
	  (Contact Admnistrator)";
//$result=mysqli_query($sql);
     $result = $this->db->query($sql);
	 if(mysqli_num_rows($result)==1){
$_SESSION['idno']=$idno;
 

//header("location: update.php?RegNo=$RegNo");
header("location: admin.php");
}
else{
//$_SESSION['logged']=FALSE;
 $_SESSION["error"] = $error;
//echo $error;
header("location: admin.php");
}
}
}
$a = new uploader();
$a->doTheUpload();

?>