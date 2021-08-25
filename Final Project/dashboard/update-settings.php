<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$id=$_POST['id'];
	$tagline = $_POST['tagline'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$about = $_POST['about'];
	$copyright = $_POST['copyright'];
	$office_address = $_POST['office_address'];

$insert="UPDATE settings SET tagline='$tagline', email='$email', phone='$phone',about='$about',copyright='$copyright',office_address='$office_address' WHERE id=$id";

$q=mysqli_query($db,$insert);

if ($q) {
	header('location:settings.php');
	}
	else
	{
		echo "not got";
	}


}