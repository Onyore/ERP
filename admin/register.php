 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin SignUp</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
           
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
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
        $firstname = $this->getPostedValue('firstname');
        $lastname= $this->getPostedValue('lastname');
	    $idno=$this->getPostedValue('idno');
        $password=$this->getPostedValue('password');
		$rpassword=$this->getPostedValue('rpassword');
        $password=md5($password);
		$rpassword=md5($rpassword);
        $sql = "insert into superadmin set firstname='$firstname', lastname= '$lastname',idno='$idno',password='$password',
		rpassword='$rpassword';";
		$result = $this->db->query($sql);
		 
		

		 
		
  }
}
$a = new uploader();
$a->doTheUpload();

?>
<form action="#" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="firstname" id="firstname" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastname" id="lastname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="idno" class="form-control form-control-user" name="idno" id="idno" placeholder="IdNo.">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="rpassword" id="rpassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" VALUE="Register Account">
                 
              </form>
			    
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
