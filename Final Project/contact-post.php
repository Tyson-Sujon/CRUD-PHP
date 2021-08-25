<?php 

// database ta insert kore dibo
require_once 'db.php';
//register.php thakay register-post e data jacche kina ter request pathano hocche
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$insert="INSERT INTO contact (name, email, message) VALUES ('$name','$email','$message')";

	$query = mysqli_query($db,$insert);
	header('location:index.php#contact');

}
?>