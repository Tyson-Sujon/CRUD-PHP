<?php 
session_start();
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
	
	$email=$_POST['email'];
	$password=$_POST['password'];

$select = "SELECT COUNT(*) as total, name, id,email, password, role FROM users WHERE email= '$email'";

	$query =mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

//print_r($assoc['password']) ;

	if ($assoc['total'] > 0) {
//die('nai');
		$hash = $assoc['password'];



		if (password_verify($password, $hash)) {

			if ($assoc['role']==1) {
			$_SESSION['id']= $assoc['id'];
			$_SESSION['email']= $assoc['email'];
			$_SESSION['name']= $assoc['name'];
		// die('nothing');	
			header('location:dashboard/dashboard.php');
			}
		}
				else{

				echo "HI";
			
			}
		}
	else
	{

		echo "not found";
	}
}

?>