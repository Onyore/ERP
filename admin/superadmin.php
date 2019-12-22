<!DOCTYPE html>
<?php
session_start();
$idno=$_SESSION['idno'];
$firstname=$_SESSION['firstname'];

if(!$_SESSION['priv']==true){
	header('Location: index.php');
}

?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin  Dashboard</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="superadmin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admins.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Created admins</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="corrections.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Correction requests</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="print/Applicants/pdf.php"><span style='color:white'>Applicants</span></a>
        </a>
         
      </li>
	  
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Received_Gowns/pdf.php"><span style='color:white'>Gowns Received</span></a>
        </a>
         
      </li>
	  
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Approved_Library/pdf.php"><span style='color:white'>Library Approved</span></a>
        </a>
         
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Approved_Finance/pdf.php"><span style='color:white'>Finance Approved</span></a>
        </a>
         
      </li>
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Confirmed_AA/pdf.php"><span style='color:white'>Academic Affairs Confirmed</span></a>
        </a>
         
      </li>
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Approved_CashOffice/pdf.php"><span style='color:white'>Cash Office Paid</span></a>
        </a>
         
      </li>
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <a class="collapse-item" href="Print/Certificate_Issued/pdf.php"><span style='color:white'>Certificates Issued</span></a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $firstname; ?></span>
                <img class="img-profile rounded-circle" src="img/img.PNG">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
		 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          
            <a href="create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Create Admin</a>
          </div>
		  

          <!-- Content Row -->
          <div class="row">

            <!-- Gowns Received-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
				<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where Received=1 and Update_count=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$Received=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gown Received</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Received;?></div>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>

            <!-- Library_Approved -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where Library_Status=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$Library_Approved=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Library Approved</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Library_Approved;?></div>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
			
            <!-- Finance_Approved -->
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where Finance_Status=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$Finance_Approved=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Finance Approved</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Finance_Approved;?></div>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
			
            <!-- Cash office  -->
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where Cash_Status=1";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$Cash_Status=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Cash Office(Paid)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Cash_Status;?></div>
                    </div>
					 </div>
                </div>
              </div>
            </div>

            <!-- Cash office Library -->
			
		

            <!-- Academic Affairs Approved -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where AA_Status=1";

$result=mysqli_query($con,$sql);
$Confirmed_AA=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">(AA Registry)Confirmed</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $Confirmed_AA;?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
					
                    
                  </div>
                </div>
              </div>
            </div>
			
			<!-- Certificates Issued -->
			
			 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students where Issue_Status=1";

$result=mysqli_query($con,$sql);
$Issued_AA=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">(AA)Certificates Issued</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $Issued_AA;?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
					
                    
                  </div>
                </div>
              </div>
            </div>


            <!-- Total Applicants -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM students";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$total=mysqli_num_rows($result);

?>
					
					
					                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Graduands</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total;?></div>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <!-- Admin Created -->
		  
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
					<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');
$sql="SELECT*FROM admin ORDER BY id";
//$sql=SELECT COUNT(id) FROM students;
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);
$admin=mysqli_num_rows($result);

?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Created Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $admin;?></div>
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
