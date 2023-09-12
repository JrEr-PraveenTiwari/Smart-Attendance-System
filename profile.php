
<?php
session_start();
error_reporting(0);
if($_SESSION["login"]==1){
?>
<?php 
include ('adnav.php');
?>

	<?php 
  if ( $_SESSION['sucess'] ) {
    print $_SESSION['sucess'];
    unset( $_SESSION['sucess']);
}?>
<?php
}
else{
	$x='http://localhost/smartattendance/login.php';
	header('location:'.$x);
}
?>

<?php
include ('conn.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(rollno) AS rollno  FROM register";
$result = $conn->query($sql);


?>



<html>
<head>
<style>
	.dash1{
display:inline-block;	
background-color:#e5e0e0;
border-radius:20px;
padding:15px;
text-align:center;
width:30%;
border-left:5px solid #20c464;
}
.dash2{
display:inline-block;	
background-color:#e5e0e0;
border-radius:20px;
padding:15px;
text-align:center;
width:95%;
border-left:5px solid #20c464;
}
	</style>
</head>
<body><h3>Hello Admin</h3><h2 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h2><br><br>

<div class="dash2">
<h3>Total Number of Registered Students :</h3><br>
<hr size="2" color="gray"><br>

<?php


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>

<p><?php echo $row[('rollno')];?> 


<?php

  }
} else {
  echo "0 results";
}
$conn->close();
?>

</p>
</div>
<!--
<div class="dash1">
<h3> Register :</h3>
<hr size="2" color="gray">
<p><?php echo "$r1";?> </p>
</div>
<div class="dash1">
<h4><b>Attendancedata</b></h4>
<hr size="2" color="gray">
<p><?php echo "$r2";?> </p>
</div>-->
<br><br>
<div class="dash1">
<h3>Add New Student </h3><br>
<hr size="2" color="gray"><br>
<p>Click to Add Student</p><br>
<a href="Register.php">Add</a>  

</div>   
	<div class="dash1">
<h3>View Student List</h3><br>
<hr size="2" color="gray"><br>
<p>Click to View Student list</p><br>
<a href="view.php">View</a> 
</div>  
<div class="dash1">
<h3> View Attendance</h3><br>
<hr size="2" color="gray"><br>
<p>Click to View Student Attendance </p><br>
<a href="viewatt.php">View</a>
</div>
</body>
</html>
