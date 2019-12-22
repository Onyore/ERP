 <!DOCTYPE html>
<html lang="en">
<?php   session_start(); 
    $RegNo=$_SESSION['RegNo'];
	$Level=$_SESSION['Level'];
	
	//echo $RegNo;
	//echo $Level;
	
require('db.php');
//include("auth.php");
//$id=$_REQUEST['id'];
$query = "SELECT * from students where RegNo='".$RegNo."'"; 

$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
    ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update details</title>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-left:25%;">

    <div class="content-middle">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
           
          <div class="content-middle">
            <div class="p-5">
              <div class="text-center">
                <img src="img.png" alt="logo"  style="width:200px;height: 150px; align:center; margin-left: 0%;">
                          <h3 align="center" ><b>KISII UNIVERSITY</b></h3>
                           <h1 class="h4 text-gray-900 mb-4"><u>Gown Application 2019</u></h1>

                <h1 class="h4 text-gray-900 mb-4"><u>Personal Details</u></h1>
              </div>
			 
              <form action="insert_update.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    School:
                    <input type="text" class="form-control form-control-user" name="Faculty" value="<?php echo $row['Faculty'];?>"  readonly="readonly">
                  </div>
                  <div class="col-sm-6">
                    Programme:
                    <input type="text" class="form-control form-control-user" name="Programme" value="<?php echo $row['Programme'];?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Full Name:
                    <input type="text" class="form-control form-control-user" name="FullName" value="<?php echo $row['FullName'];?>"  readonly="readonly">
                  </div>
                  <div class="col-sm-6">
                    Registration Number Number:
                    <input type="text" class="form-control form-control-user" name="RegNo" value="<?php echo $row['RegNo'];?>" readonly="readonly">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Email:
                    <input type="email" class="form-control form-control-user" value="<?php echo $row['Email'];?>" required name="Email" >
                  </div>

                  <div class="col-sm-6">
                    ID No:
                    <input type="text" class="form-control form-control-user" value="<?php echo $row['id_no'];?>" name="id_no">
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Teleplone Number:
                    <input type="text" class="form-control form-control-user" required value="<?php echo $row['Tel'];?>" name="Tel" >
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" VALUE="Update">
                 
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
