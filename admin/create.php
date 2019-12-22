     <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="col-xl-10 col-lg-12 col-md-9">
 <!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=5, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CREATE ADMINSTRATOR</title>

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
                  <form action="insert_user.php" method="post">
                    <img src="img.png" alt="logo"  style="width:200px;height: 150px; margin-left:30%;">
                          <h3 style="text-align:left;font-weight:600;><b>KISII UNIVERSITY</b></h3>
					
                           <h1 class="h4 text-gray-900 mb-4"><u>CREATE ADMINSTRATOR</u></h1>
<?php
                    if(isset($_SESSION["error"])){
                        //$error = $_SESSION["error"];
                        //echo "<span style='color:red;text-align:center;'>$error</span>";
                    }
                ?> 
				<div class="form-group">
                    Privillege:
   <select id="level" name="priv" type="text" required class="form-control form-control-user">
    <option value=""></option>
	 <option value="8">Academic Affairs(Cert Issuance)</option>
	<option value="7">Academic Affairs(Registry)</option>
	<option value="6">Cash Office</option>
	<option value="5">Library Adminstrator</option>
    <option value="3">Academic Manager</option>
    <option value="2">Finance Adminstrator</option>
    <option value="1">School Adminstrator</option>
	
	 
   </select>
   </div>
                    <div class="form-group">
                    School:
   <select id="level" name="school" type="text"  class="form-control form-control-user">
    <option value="0"></option>
    <option value="1">SCHOOL OF BUSINESS AND ECONOMICS</option>
    <option value="2">SCHOOL OF LAW </option>
    <option value="3">SCHOOL OF INFORMATION SCIENCES AND TECHNOLOGY </option>
    <option value="4">SCHOOL OF HEALTH SCIENCES </option>
    <option value="5">SCHOOL OF AGRICULTURE AND NATURAL RESOURCE MANAGEMENT </option>
    <option value="6">SCHOOL OF ARTS AND SOCIAL SCIENCES </option>
	<option value="7">SCHOOL OF EDUCATION AND HUMAN RESOURCES </option>
    <option value="8">NAIROBI CAMPUS </option>
	<option value="9">KERICHO CAMPUS</option>
	<option value="10">ELDORET CAMPUS</option>
	<option value="11">KAPENGURIA CAMPUS</option>
	<option value="12">MIGORI CAMPUS</option>
	<option value="13">SCHOOL OF PURE AND APPLIED SCIENCES</option>
	
	
  </select>
  
   
                      <!-- <input type="school" class="form-control form-control-user" name="school" id="school" aria-describedby="emailHelp" placeholder="Law">-->
                    </div>
                    <div class="form-group">
                      National ID
                      <input type="text" class="form-control form-control-user" name="idno" required aria-describedby="emailHelp">
                    </div>

                    <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="firstname" id="firstname" required placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastname" id="lastname" required placeholder="Last Name">
                  </div>
                </div>
					
                    
                    
                      
					  <input type="submit" style="color:white;background-color:green;" class="form-control form-control-user" value="CREATE ADMIN" required aria-describedby="emailHelp">
                   
                     	  
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
