<?php
include('conn.php');

 
$rollno=$_POST['rollno'];



$query= "SELECT * FROM `register` WHERE `rollno`='$rollno'";

$results = mysqli_query($conn,$query);

$check=mysqli_num_rows($results);

if($check==1)
{





 $query = "INSERT INTO att(rollno, time) VALUES ('$rollno', now())";

if($conn->query($query)==true)
{
	header('location:Home.php?msg=Register Successfully !');
}
else
{
	header('location:Home.php?msg=Not Register !');
}
}

else
{
	header('location:Home.php?msg=Not Matched !');
}
?>