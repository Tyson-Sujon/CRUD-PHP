<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$id=$_POST['id'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$location = $_POST['location'];
	$summary = $_POST['summary'];


// 	$id = $_POST['id'];
// $name=$_POST['name'];
// $email=$_POST['email'];

$update_status = "UPDATE office_address SET phone='$phone', email= '$email', address= '$address', location= '$location', summary= '$summary' WHERE id=$id";

if (mysqli_query($db,$update_status)) {
	// $_SESSION['update_user']='user update successfully';
	header('location:address.php');
}
}

?>
