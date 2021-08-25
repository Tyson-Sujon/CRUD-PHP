<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name = $_POST['name'];
	$icon = $_POST['icon'];
	$result = $_POST['result'];

// normal variable e likhle ja hobe

//  	$insert="INSERT INTO socials (name, icon, link) VALUES ('name','icon','link') ";

// constent variable e likhle ja hoi

$insert="INSERT INTO item (name, icon, result) VALUES ('$name','$icon','$result')";	

if (mysqli_query($db,$insert)) {
	header('location:success.php');
	}



}

?>
