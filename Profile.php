<!DOCTYPE html>
<?php
session_start();
$RegNo=$_SESSION['RegNo'];
$id=$_SESSION['id'];
if(!$_SESSION['RegNo']==true){
	header('Location: index.php');
}
?>

<html lang="en">
<head>
<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');

$sql="SELECT * FROM Students WHERE id=$id";
 
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){	

          $FullName=$row['FullName'];
		  $id_no=$row['id_no'];
		  $Level=$row['Level'];
		  $School=$row['Faculty'];
		  $Programme=$row['Programme'];
		  $graduation_no=$row['graduation_no'];
		  $cert_no=$row['cert_no'];
		  $congregation_no=$row['congregation_no'];
		  $Email=$row['Email'];
		  $Tel=$row['Tel'];
		  $Confirm_Status=$row['Confirm_Status'];
		  $postal=$row['postal'];
		  $residence=$row['residence'];
		    $Correction_Status=$row['Correction_Status'];
		  $_SESSION['id']=$id;
			
if($School==1){
	$School="SCHOOL OF BUSINESS AND ECONOMICS";
}
elseif($School==2){
	$School="SCHOOL OF LAW";
}
elseif($School==3){
	$School="SCHOOL OF INFORMATION SCIENCES AND TECHNOLOGY";
}
elseif($School==4){
	$School="SCHOOL OF HEALTH SCIENCES ";
}
elseif($School==5){
	$School="SCHOOL OF AGRICULTURE AND NATURAL RESOURCE MANAGEMENT";
}
elseif($School==6){
	$School="SCHOOL OF ARTS AND SOCIAL SCIENCES";
}
elseif($School==7){
	$School="SCHOOL OF EDUCATION AND HUMAN RESOURCES ";
}
elseif($School==8){
	$School="NAIROBI CAMPUS";
}
elseif($School==9){
	$School="KERICHO CAMPUS";
}
elseif($School==10){
	$School="ELDORET CAMPUS";
}
elseif($School==11){
	$School="KAPENGURIA CAMPUS";
}
elseif($School==12){
	$School="MIGORI CAMPUS";
}
elseif($School==13){
	$School="SCHOOL OF PURE AND APPLIED SCIENCES";
}
else{
	$School="KISII UNIVERSITY";
}
			
			
           }

?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profile</title>

  <!-- Custom fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Student <sup>7th Grad</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><?php echo $RegNo ?></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Gown Application -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="dashboard.php"><span style='color:white'>Status Page</span></a>
        </a>
         
      </li>
	  
	   
	   <!-- Apply for Certificate -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="https://www.kisiiuniversity.ac.ke"><span style='color:white'>Career Department</span></a>
        </a>
         
      </li>
	   <!-- Certificate Release -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <a class="collapse-item" href="dashboard.php"><span style='color:white'>Home</span></a>
        </a>
         
      </li>


      <!-- Join Alumni -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="https://www.kisiiuniversity.ac.ke"> <span style='color:white'> Alumni Page</span></a>
        </a>
         
      </li>

       

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              
              <div class="input-group-append">
                
              </div>
            </div>
          </form> 

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

             

             

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $RegNo; ?></span>
                <img class="img-profile rounded-circle" src="img/img.PNG">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="dashboard.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Home
                </a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
		 
       

          <?php
		  if($Correction_Status==1){
			  
			    echo '<a href="dashboard.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Edit Request sent</a>';
			  
		  }else{
			  if($Confirm_Status==1){
			  echo'
     <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Personal Details Confirmed</a>
          ';
		  }else{
			  echo '<a href="confirm_details.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Confirm Personal Details</a>';
			  echo  '<a style="color:white;" onclick="openForm()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Reject</a>';
		  }
		  }

		  ?>
		   
          </div>
		    

          <!-- Content Row -->
            
			 <p><b>Personal Details</b><p>
			 
              <form action="insert_update.php" method="post">
			 
			<div class="form-group row">
                  
                  <div class="col-sm-6">
                    Full Name:
                    <input type="text" class="form-control form-control-user" name="FullName" value="<?php echo $FullName;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Registration Number:
                    <input type="text" class="form-control form-control-user" name="RegNo"  value="<?php echo $RegNo;?>" readonly>
                  </div>
				  </div>
				  
				  <div class="form-group row">
                  <div class="col-sm-6">
                    National ID:
                    <input type="text" class="form-control form-control-user" name="id_no" value="<?php echo $id_no;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Level:
                    <input type="text" class="form-control form-control-user" name="Level" value="<?php echo $Level;?>" readonly>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-sm-6">
                    School:
                    <input type="text" class="form-control form-control-user" name="Faculty" value="<?php echo $School;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Programme:
                    <input type="text" class="form-control form-control-user" name="Programme" value="<?php echo $Programme;?>" readonly>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-sm-6">
                    Date of Admission:
                    <input type="text" class="form-control form-control-user" name="Admission"  readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Graduation Date/Year:
                    <input type="text" class="form-control form-control-user" name="Graduation_Date"  readonly>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-sm-6">
                    Final Cummulative/Average(%):
                    <input type="text" class="form-control form-control-user" name="cummulative"  readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Classification:
                    <input type="text" class="form-control form-control-user" name="Classification"  readonly>
                  </div>
                </d
				
				<div class="form-group row">
                  <div class="col-sm-6">
                    Option Taken:
                    <input type="text" class="form-control form-control-user" name="Option"  readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Number on Graduation List:
                    <input type="text" class="form-control form-control-user" name="Graduation_No" value="<?php echo $graduation_no;?>" readonly>
                  </div>
                </div>
				
				<div class="form-group row">
                  <div class="col-sm-6">
                    KCSE Certificate Serial No:
                    <input type="text" class="form-control form-control-user" name="certNo" value="<?php echo $cert_no;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Congregation No:
                    <input type="text" class="form-control form-control-user" name="Congregation_No" value="<?php echo $congregation_no;?>" readonly>
                  </div>
                </div>
				<p><b> Contact Address </b></p>
				 <div class="form-group row">
                  <div class="col-sm-6">
                    Email:
                    <input type="text" class="form-control form-control-user" name="Email" value="<?php echo $Email;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Tel:
                    <input type="text" class="form-control form-control-user" name="Tel" value="<?php echo $Tel;?>" readonly>
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-6">
                    Postal Address:
                    <input type="text" class="form-control form-control-user" name="postal" value="<?php echo $postal;?>" readonly>
                  </div>
				  <div class="col-sm-6 mb-3 mb-sm-0">
                    Residence:
                    <input type="text" class="form-control form-control-user" name="residence" value="<?php echo $residence;?>" readonly>
                  </div>
                </div>
				
				
			
				

			
               
                 
              </form>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

 
 <div class="form-popup" id="myForm">
  <form action="correction.php" class="form-container" method=GET>
    <h1>EDIT REQUEST</h1>
    <label for="Fine"><b>Indicate corrections:</b></label>
	<input type="text" placeholder="Name,ID No. etc" name="Correction" required>
	<label for="Fine"><b>How it should be:</b></label>
    <input type="text" placeholder="Byrent Dan Ernest,12345678" name="Rectify" required>
	<input hidden type="text"  name="id" value="<?php echo $id?>"required>
 <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
 

</body>

</html>
