<?php 

// database ta insert kore dibo
require_once 'session.php';
require_once '../db.php';
//register.php thakay register-post e data jacche kina ter request pathano hocche
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$id=$_SESSION['id'];
	$image_name =$_FILES['profile_image']['name'];
	$explode=explode('.', $image_name);
	$ext=end($explode);
	// print_r($_FILES['profile_image']);
	// die();
	$allow_format=['jpg','png','JPEG'];

	if (in_array($ext, $allow_format)) {
		if ($_FILES['profile_image']['size'] < 7000000) {
			// echo rand(1, 5000). $id . '.' .$ext;
			$new_ext=  $id . '.' .$ext;

			$img_check="SELECT * FROM users WHERE id = $id";
			$img_q=mysqli_query($db,$img_check);
			$img_assoc = mysqli_fetch_assoc($img_q);
			$old_img_location = 'upload/'.$img_assoc['profile_image'];
			if ($img_assoc['profile_image']!= 'default.png') {
				if(file_exists($old_img_location)){
					unlink($old_img_location);

				}
			}
			// else
			// 	echo "string";
			// echo $img_assoc['profile_image'];
			// die();

			$new_location ='upload/'. $new_ext;
			move_uploaded_file( $_FILES['profile_image']['tmp_name'], $new_location);

		$update="UPDATE users SET name='$name',email='$email',profile_image=  '$new_ext' WHERE id='$id'";

	$q=mysqli_query($db,$update);
	
	if ($q) {
		$_SESSION['name']=$name;
		header('location:edit-profile.php');
	}

		}	
		else{
		echo "not allow";
	}
	
	}
	else{
		echo "ok not";
	}


}
?>