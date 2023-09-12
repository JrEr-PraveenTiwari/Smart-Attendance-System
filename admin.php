<html>
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$db='attendance';
// Create connection
$db1 = new mysqli($servername, $username, $pass, $db);

// Check connection
if ($db1->connect_error) {
    die("Connection failed: " . $db1->connect_error);
} 
echo "Connected successfully";

   $email=$_POST['email'];
  $password=$_POST['password'];
 
$query= "SELECT * FROM `admin` WHERE `email`='$email' AND`password`='$password'";
//echo $query; die();
$results = mysqli_query($db1,$query);
//echo mysqli_num_rows($results); die();
$rowcounts = mysqli_num_rows($results);
echo $rowcounts ; //die();
if($rowcounts==1)
{
	
	$x='http://localhost/smartattendance/profile.php';
	header('location:'.$x);
	$_SESSION["e_num"] = $_POST['email'];
	$_SESSION["login"] = 1;
	$_SESSION['sucess']="<script>alert('You Login successfully')</script>";
}
else
{
	  $_SESSION['error']="<script>alert('Wrong Credentials')</script>";
	$x='login.php';
	header('location:'.$x);
	 
	}
			
?>
</body>
</html>