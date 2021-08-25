<?php 
	//data-base call kora

//die('welcome');
session_start();
require_once '../db.php'; 
  $id = $_GET['user_id'];

 //echo $id;

$update_status ="UPDATE users SET status = 2 WHERE id = '$id'";

if (mysqli_query($db, $update_status)) {
	$_SESSION['delete_user'] = 'User Deleted Successfully';
	header('location:users.php');
}

else
{
	echo "not found";
}

 ?>
// $delete = "DELETE FROM users WHERE id = $id";


// if (mysqli_query($db, $delete)) {
// 	$_SESSION['delete_user'] = 'User Deleted Successfully';
// 	header('location:users.php');
// }



