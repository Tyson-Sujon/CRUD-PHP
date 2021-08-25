<?php 

// database ta insert kore dibo
require_once 'db.php';
//register.php thakay register-post e data jacche kina ter request pathano hocche
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=password_hash($_POST['password'], PASSWORD_DEFAULT);

	//kaj holo user er 1ta email dea akber verify kora lagbe[1st kaj]
	//tai amra query chalaia dekhbo oi database-table e 1ta er beshi email ase-kina[2nd kaj]
	$user_check = "SELECT COUNT(*) as total FROM users WHERE email='$email'";
	
	$q=mysqli_query($db,$user_check );
	$after_assoc= mysqli_fetch_assoc($q);


	//echo $after_assoc['total'];
	if ($after_assoc['total']>0) {
		
			header('location:register.php');
		//echo "email found";
	}
	else
	{
	$insert="INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
	//database er shate insert korte hole ata use korte hoi prothome db connection er php ortha db.php pore insert er query ta database e execute korbe... 
	// echo $email;
	// echo $name;
	// echo $password;
	// die();

	$query=mysqli_query($db,$insert);

				if ($query) {
					
					header('location:login.php');
					//echo "submittion successfully okay";
				
				}

				else{
					echo "Errors";
				}
	}


//die();


	//akhon kaj holo data-base e data insert howa
	

	}

		else{

			//eta jekhane location kora browser URL er opor dhore enter dile oi location e chole jabe
			header('location:register.php');
		}


 ?>