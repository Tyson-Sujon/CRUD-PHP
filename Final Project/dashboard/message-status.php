<?php 
session_start();
require_once '../db.php'; 
  $id = $_GET['id'];

 //echo $id;

$select= "SELECT * FROM contact WHERE id = $id";
$q= mysqli_query($db,$select);
// print_r($select_query) ;
$assoc=mysqli_fetch_assoc($q);

// print_r($assoc) ;
// die();
if ($assoc['status']==1) {
	$update_status ="UPDATE contact SET status = 2 WHERE id = '$id'";

	if (mysqli_query($db, $update_status)) {
	// $_SESSION['delete_user'] = 'User Deleted Successfully';
	header('location:contacts.php');
}
}
	else{
		$update_status ="UPDATE contact SET status = 1 WHERE id = '$id'";

	if (mysqli_query($db, $update_status)) {
	// $_SESSION['delete_user'] = 'User Deleted Successfully';
	header('location:contacts.php');
	}

}

// $update_status ="UPDATE users SET status = 2 WHERE id = '$id'";

// if (mysqli_query($db, $update_status)) {
// 	$_SESSION['delete_user'] = 'User Deleted Successfully';
// 	header('location:users.php');
// }

// else
// {
// 	echo "not found";
// }

 ?>



// $delete = "DELETE FROM users WHERE id = $id";


// if (mysqli_query($db, $delete)) {
// 	$_SESSION['delete_user'] = 'User Deleted Successfully';
// 	header('location:users.php');
// }



