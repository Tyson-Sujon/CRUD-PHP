<?php 
session_start();
require_once '../db.php'; 

$id = $_POST['user_id'];
$name=$_POST['name'];
$email=$_POST['email'];

$update_status = "UPDATE users SET name='$name', email= '$email' WHERE id=$id";

if (mysqli_query($db,$update_status)) {
	$_SESSION['update_user']='user update successfully';
	header('location:users.php');
}


 ?>