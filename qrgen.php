<?php

include('phpqrcode/qrlib.php');
include('conn.php');

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$specialization = $_POST['specialization'];
$password = $_POST['password'];


$path = 'images/';
$file = $path.uniqid().".png";

$ecc = 'L';
$pixel_Size = 10;
$frame_Size = 10;


$query = "INSERT INTO register(name,rollno, email, mobile, gender, dob, address, qualification, specialization, password, qrimage) VALUES ('$name', '$rollno', '$email', '$mobile','$gender', '$dob', '$address', '$qualification', '$specialization', '$password', '$file')";

if($conn->query($query)==true)
{
	QRcode::png($rollno, $file, $ecc, $pixel_Size, $frame_Size);
	$msg="<script>alert('You Student Added Succesfully')</script>";
	header('location:Register.php?msg='."$msg");
}
else
{
	header('location:Register.php?msg=Not Register !');
}



?>