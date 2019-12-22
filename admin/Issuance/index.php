<!--ref: http://net.tutsplus.com/tutorials/javascript-ajax/using-jquery-to-manipulate-and-filter-data/-->
<!DOCTYPE html>
 <?php   session_start(); 
    $firstname=$_SESSION['firstname'];
	$lastname=$_SESSION['lastname'];
	//$School=$_SESSION['School'];
	if($_SESSION['firstname']==False){
		header('Location: logout.php');
	}
    ?>
<html>
     
  <head>
  <script type="text/javascript" src="http://canvg.github.io/canvg/canvg.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/canvg/1.4.0/canvg.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Academic Affairs(Issuance)</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="application.js" type="text/javascript" charset="utf-8"></script>

	<link rel="stylesheet" type="text/css" href="/css/result-light.css">
	 <link rel="stylesheet" type="text/css" href="css/header.css">
	 <style>
	       
  .dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(248, 247, 216, 0.7);;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}
.desc {
  padding: 12px;
  text-align: center;
}
.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
	 
	 <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
  margin-left:30px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
	 <style id="compiled-css" type="text/css">
      .text-box {
 border: solid 1px black;
 min-width:100px;
 padding: 5px;
 display: inline-block;
}

.text-box:focus{
  outline:0;
}

  </style>
	
    
	 
	 <style>

	 button {
  background-color: #E0ECF8; 
  border-radius: 15px;
  border-color:#066A75;
  color: #066A75;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
 .button {
  background-color: none; 
  border-radius: 20px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:50px;
}
.button2 {
  background-color: #E0ECF8; 
  border-radius: 20px;
  border-color:#066A75;
  color: #066A75;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:50%;
}
	 </style>
        
		
		 
		 <style>

.header_column_a{
	float: left;
	width: 15%;
	font-size:30px;
	color:brown;
	font-family:ALGERIAN;
	margin-top:15px;

	
}
.header_column_b{
	float: left;
	width: 70%;
	
	
}
.header_column_c{
    width: 15%;
	float: left;
	width: auto;
	font-size:auto;
	color:brown;
	font-family:ALGERIAN;
	margin-top:10px;

	
}
.row:after {
	content:"";
	display: table;
	clear: both;
	
	
}


</style>

<style>
.icon {
    display: inline-block;
    vertical-align: top;
    width: 90px;
    height: 90px;
    margin-left: 40%;
    margin-top: 5px;
    border-radius:40px;/* if you want it vertically middle of the navbar. */
}
.iconb {
    display: inline-block;
    vertical-align: top;
    width: 90px;
    height: 90px;
    margin-left: 40%;
    margin-top: 5px;
    border-radius:40px;/* if you want it vertically middle of the navbar. */
}
.icona {
    
    margin-left:70%;
    width: 32px;
    height: 32px;
   
}

.column{
	float: left;
	width: 50%; 
	
}
.row:after {
	content:"";
	display: table;
	clear: both;
	
	background: #fff url(../images/station.jpg) repeat top left;
	
}

@media only screen and (max-width: 700px){
	.column{
		width:50%;
	}
}
@media only screen and (max-width: 450px){
	.column{
		width:100%;
	}
}
</style>
	 </style>
<script
    type="text/javascript"
    src="//code.jquery.com/jquery-2.0.2.js"
    
  ></script>

  <!-- TODO: Missing CoffeeScript 2 -->

  

  </head>
 
  <body>
     
     
  
      <div id='dom-to-print'>
      
     
     
  <div class="row">
<div class="header_column_a">

<a href="index.php"><img class="icon" src="images/logo.png"></a>

</div>
<div class="header_column_b">
<h1>KISII UNIVERSITY
<br>Certificate Issuance</h1>

</div>
<div class="header_column_c">
   <div class="dropdown">
    <img src="images/logo.png"  class="iconb">
    <div class="dropdown-content">
     <div class="desc"><?php echo ($firstname." ".$lastname) ?></div>
	 
      <a href="logout.php"><div class="desc">Logout</div></a>
    </div>
  </div>
<!a href="logout.php"><!> <!img class="icon" src="images/user.png"><?php //echo $name ?><!/p><!/a>

</div>
</div>
  
    <div id="pagewrap">
      <div id="search">
	  <label for="filter">Filter</label> <input type="text" name="filter" value="" placeholder="search" id="filter" />
        
      </div>
      
	  
 <div id='dom-to-print'>
        <table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>            
            <tr>
                  <th>id</th>
                  <th>Reg. Number</th>
                  
				  <th>Full Name</th>
				  <th>School</th>
				  <th>Issue</th>
				
				  
            </tr>
          </thead>
          <tbody> 
<?php


//database connection
$con=mysqli_connect('localhost', 'root', '', 'gowns');

$sql="SELECT * FROM Students WHERE AA_Status=1 and Issue_Status=0 ORDER BY Faculty DESC";
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){	
$School=$row['Faculty'];
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
           
           echo"<tr><td>".$row['id']."</td><td>".$row['RegNo']."</td><td>"
			.$row['FullName']."</td> <td>".$School."</td>
			<td><a href='issue.php? id=".$row['id']."';> Issue</a></td>
			</tr>";
			
			
			
           }

?>
		
          </tbody>
          </div>
		  </div>
      
          <button class="btn" onclick= "window.location.href= 'print/Issued/pdf.php'"><i class="fa fa-download"></i> Download Issued</button>
          <button class="btn" onclick= "window.location.href= 'print/pending/pdf.php'"><i class="fa fa-download"></i> Download pending</button>
		  
          
          
		 
		  
        </table>
     
</div>
<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>

  

    <script>
        

var app = angular.module('myApp', []);

app.controller('AppCtrl', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {
  
  // Load the data
  $http.get('http://www.corsproxy.com/loripsum.net/api/plaintext').then(function (res) {
		$scope.loremIpsum = res.data;
    $timeout(expand, 0);
  });
  
  $scope.autoExpand = function(e) {
        var element = typeof e === 'object' ? e.target : document.getElementById(e);
    		var scrollHeight = element.scrollHeight -60; // replace 60 by the sum of padding-top and padding-bottom
        element.style.height =  scrollHeight + "px";    
    };
  
  function expand() {
    $scope.autoExpand('TextArea');
  }
}]);
    </script>

    
</body>
 
	
</html>