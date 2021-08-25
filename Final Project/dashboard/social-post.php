<?php 
	session_start();
	require_once '../db.php'; 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$icon = $_POST['icon'];
	$name = $_POST['name'];
	$link = $_POST['link'];

// normal variable e likhle ja hobe

//  	$insert="INSERT INTO socials (name, icon, link) VALUES ('$name','$icon','$link') ";

// constent variable e likhle ja hoi

define('insert', "INSERT INTO socials (name, icon, link) VALUES ('$name','$icon','$link')");	

if (mysqli_query($db,insert)) {
	echo "string";
	}
	else
	{
		echo "not";
	}


}

?>
