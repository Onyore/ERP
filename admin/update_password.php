     <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="col-xl-10 col-lg-12 col-md-9">
 <!DOCTYPE html>
<html lang="en">
<?php
session_start();
$idno=$_SESSION['idno'];
//echo $idno;
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=5, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin|Change Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-left:52%;">

    <!-- Outer Row -->
    <div class="row justify-content-middle">

      <div class="content-middle">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-border-0">
            <!-- Nested Row within Card Body -->
            <div class="rightwards">
              
              <div class="content-middle">
                <div class="p-5">
                  <div class="text-center">
                    
                  </div>
                  <form action="submit_update_password.php" method="post">
                    <img src="img.png" alt="logo"  style="width:150px;height: 100px; align:center;">
                          <h3 style="text-align:left;font-weight:600;><b>KISII UNIVERSITY</b></h3>
					
                           <h1 class="h4 text-gray-900 mb-4"><u>CREATE PASSWORD</u></h1>
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span style='color:red;text-align:center;'>$error</span>";
                    }
                ?> 
                   
                    
                    <div class="form-group">
                      New Password:
                      <input type="password" class="form-control form-control-user" name="password" required >
                    </div>
					<div class="form-group">
                      Confirm Password:
                      <input type="password" class="form-control form-control-user" name="password" required >
                    </div>
					
                    
                    
                      
					  <input type="submit" style="color:white;background-color:green;" class="form-control form-control-user" value="Login" required aria-describedby="emailHelp">
                   
                     	  
                  </form>
                   
                  <div class="text-center">
               </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<?php
    unset($_SESSION["error"]);
?>
</html>
