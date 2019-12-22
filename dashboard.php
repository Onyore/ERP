<!DOCTYPE html>


<html lang="en">
<?php
session_start();
$RegNo=$_SESSION['RegNo'];
if(!$_SESSION['RegNo']==true){
	header('Location: index.php');
}
//echo $RegNo;
//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students WHERE RegNo='$RegNo'";
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
	$FullName=$row['FullName'];
	$Received=$row['Received'];
	$id=$row['id'];
	$Confirm_Status=$row['Confirm_Status'];
	$Library_Status=$row['Library_Status'];
	$Finance_Status=$row['Finance_Status'];
	$Gown_Overdue=$row['Gown_Overdue'];
	$AA_Status=$row['AA_Status'];
	$AA_Reason=$row['AA_Reason'];
	$Library_Fine=$row['Library_Reason'];
	$Cash_Status=$row['Cash_Status'];
	$Correction_Status=$row['Correction_Status'];
	$Finance_Explanation=$row['Finance_Explanation'];
	$Library_Explanation=$row['Library_Explanation'];
	
	$Transcript=$row['Transcript_Fee'];
$Gown_Fine=$row['Gown_Fine'];
$Finance_Reason=$row['Finance_Reason'];
$Total=$Transcript + $Library_Fine + $Gown_Fine;
	if($Cash_Status==1){
		$Received="Gown Returned";
		$Library_Status="Approved";
		$Library_Fine=0;
		$Finance_Status="Approved";
		$Finance_Reason=0;
		$Gown_Fine=0;
	}else{
		if($Received==1){
		$Received="Gown Returned";
		
	}else{
		$Received="Gown Not Returned";
		
	}
	if($Library_Status==1){
		$Library_Status="Approved";
		$Library_Fine=0;
	}
	elseif($Library_Status==3){
		$Library_Status="Disapproved";
		
		
	}else{
		$Library_Status="Pending Approval";
		$Library_Fine=0;
	}
	if($Finance_Status==1){
		$Finance_Status="Approved";
		$Finance_Reason=0;
	}
	elseif($Finance_Status==3){
		$Finance_Status="Disapproved";
		
	}else{
		$Finance_Status="Pending Approval";
		$Finance_Reason=0;
	}
	}
	
	if($AA_Status==1){
		$AA_Status="Cleared to collect Certificate";
	}elseif($AA_Status==3){
		
		$AA_Status=$AA_Reason;
		
		
		
	}
	else{
		$AA_Status="Pending Clearance";
		
		
	}
	$_SESSION['id']=$id;
}

?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
            <a class="collapse-item" href="https://www.kisiiuniversity.ac.ke"><span style='color:white'>Home</span></a>
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
           <a class="collapse-item" href="Profile.php"><span style='color:white'>Personal Details</span></a>
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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
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
                <a class="dropdown-item" href="Profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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

        <!-- Begin Page Content --
        <div class="container-fluid">
        
          <!-- Page Heading -->
		 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Status</h1>
          <?php if($Confirm_Status==1){
			  echo'
     <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Personal Details Confirmed</a>
          ';
		  }elseif($Correction_Status==1){
			  
			  echo '<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Edit Request sent</a>';
		  }
		  else{
			  echo '<a href="Profile.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Confirm Personal Details</a>';
		  }?>
		  
</div>
          <!-- Content Row -->
          <div class="row">

            <!-- Status on the Gown Application -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
				<?php


//database connection
//$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$sql="SELECT*FROM students where Status=1 and Update_count=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
//$result=mysqli_query($con,$sql);
//$approved=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SCHOOL CLEARANCE(GOWNS)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Received; ?></div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">Days Overdue = <?php echo $Gown_Overdue; ?></div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">Total Fine = <?php echo $Gown_Fine; ?></div>
					  
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>

            <!-- Updates on the Certificate Application -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
//$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$sql="SELECT*FROM students where Issued=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
//$result=mysqli_query($con,$sql);
//$issued=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Library Clearance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Library_Status; ?></div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">Total Fine = <?php echo $Library_Explanation,'  ', $Library_Fine; ?></div>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
//$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$sql="SELECT*FROM students where Update_count=1 and Status=0";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
//$result=mysqli_query($con,$sql);
//$pending=mysqli_num_rows($result);

?>
<?php if($Cash_Status==1){
			  
          $Cash_Status="Cleared";
		  $Total=0;
		  }else{
			  $Cash_Status="Pending Clearance";
		  }?>
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cash Office</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Cash_Status; ?></div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">Total Expected = <?php echo $Total; ?></div>
                        </div>
                        
                      </div>
                    </div>
					
                    
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
//$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$sql="SELECT*FROM students where Update_count=1 and Status=0";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
//$result=mysqli_query($con,$sql);
//$pending=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Student Finance</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Finance_Status; ?></div>
					  <div class="h5 mb-0 font-weight-bold text-gray-800">Total Fine = <?php echo $Finance_Explanation, '  ', $Finance_Reason; ?></div>
                        </div>
                        
                      </div>
                    </div>
					
                    
                  </div>
                </div>
              </div>
            </div>
			
			
			

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
//$con=mysqli_connect('localhost', 'root', '', 'gowns');
//$sql="SELECT*FROM students WHERE confirmed_Status=0";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
//$result=mysqli_query($con,$sql);
//$total=mysqli_num_rows($result);

?>
					
					
					                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Academic Affairs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $AA_Status; ?></div>
					 
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		 

          <!-- Content Row -->

           
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
		  <?php
		  
		  if($AA_Status=="Pending Clearance"){
			  echo '<p style="color:red;"><b>You will be able to download Final Certificate Clearance form, Transcript Release form and Certificate Release form after all the clearance</b></p>';   

		  }
		  else{
			  echo'<a href="tcpdf/pdf/transcript.php">Download TRANSCRIPT RELEASING FORM</a><br>
					<a href="tcpdf/pdf/certificate.php">Download CERTIFICATE RELEASING FORM</a><br>
					<a href="tcpdf/pdf/F_Clearance.php">Download FINAL CLEARANCE FOR CERTIFICATE</a>';   
		  }
		  
         
		  ?>
		  </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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

 

</body>

</html>