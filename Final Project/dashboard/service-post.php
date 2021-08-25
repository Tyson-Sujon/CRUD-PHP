<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name = $_POST['name'];
	$icon = $_POST['icon'];
	$summary = $_POST['summary'];

// normal variable e likhle ja hobe

//  	$insert="INSERT INTO socials (name, icon, link) VALUES ('name','icon','link') ";

// constent variable e likhle ja hoi

$insert="INSERT INTO services (name, icon, summary) VALUES ('$name','$icon','$summary')";	

if (mysqli_query($db,$insert)) {
	echo "string";
	}
	else
	{
		echo "not";
	}


}

?>
