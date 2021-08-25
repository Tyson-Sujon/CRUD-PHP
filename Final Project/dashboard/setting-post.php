<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$tagline = $_POST['tagline'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$about = $_POST['about'];
	$copyright = $_POST['copyright'];
	$office_address = $_POST['office_address'];

$insert="INSERT INTO settings (tagline, email, phone,about,copyright,office_address) VALUES ('$tagline','$email','$phone','$about','$copyright','$office_address') ";

$q=mysqli_query($db,$insert);

if ($q) {
	header('location:settings.php');
	}
	else
	{
		echo "not got";
	}


}