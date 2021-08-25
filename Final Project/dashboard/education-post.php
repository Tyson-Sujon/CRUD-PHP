<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$title = $_POST['title'];
	$year = $_POST['year'];
	$progress = $_POST['progress'];
	// $summary = $_POST['summary'];

// normal variable e likhle ja hobe

//  	$insert="INSERT INTO socials (name, icon, link) VALUES ('name','icon','link') ";

// constent variable e likhle ja hoi

$insert="INSERT INTO educations (title, year, progress) VALUES ('$title','$year','$progress')";	

if (mysqli_query($db,$insert)) {
	header('location:educations.php');
	}
	else
	{
		echo "not";
	}


}

?>
