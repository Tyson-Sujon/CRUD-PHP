<?php 
// session_start();
// database ta insert kore dibo
require_once 'session.php';
require_once '../db.php';
//register.php thakay register-post e data jacche kina ter request pathano hocche
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$title=$_POST['title'];
	$category=$_POST['category'];
	$summary=$_POST['summary'];

	$insert="INSERT INTO portfolios (title, category, summary) VALUES ('$title','$category','$summary')";

		$q=mysqli_query($db,$insert);

		$last_insert_id = mysqli_insert_id($db);


	$image_name =$_FILES['logos']['name'];

	$explode=explode('.', $image_name);
	$ext=end($explode);
	// print_r($_FILES['profile_image']);
	$allow_format=['jpg','png','JPEG'];

	if (in_array($ext, $allow_format)) {
		if ($_FILES['logos']['size'] < 700000000) {
			// echo rand(1, 5000). $id . '.' .$ext;
			$thumbnail=  $last_insert_id . '.' .$ext;

			$new_location ='upload/all_image/'. $thumbnail;
			move_uploaded_file( $_FILES['logos']['tmp_name'], $new_location);

		$thumbnail_update = "UPDATE images SET logo= '$thumbnail' WHERE id = $last_insert_id" ;
		$update_query=mysqli_query($db,$thumbnail_update);
	
	
		// echo "string";

		}	
		else{
		echo "not allow";
	}
}
// end thumbnail	



// start featured_image
	$featured_image =$_FILES['my_image']['name'];

	$featured_explode=explode('.', $featured_image);
	$featured_ext=end($featured_explode);
	// print_r($_FILES['profile_image']);
	$featured_allow_format=['jpg','png','JPEG'];

	if (in_array($featured_ext, $featured_allow_format)) {
		if ($_FILES['my_image']['size'] < 700000000) {
			// echo rand(1, 5000). $id . '.' .$ext;
			$featured_image_ext=  $last_insert_id . '.' .$featured_ext;

			$featured_new_location ='upload/cv/'. $featured_image_ext;
			move_uploaded_file( $_FILES['my_image']['tmp_name'], $featured_new_location);


			$featured_update = "UPDATE  images SET my_image= '$featured_image_ext' WHERE id = $last_insert_id" ;
			$featured_query=mysqli_query($db,$featured_update);

		if ($q || $update_query || $featured_query) {
		
		header('location:upload.php');
	}
	


		}	
		else{
		echo "not allow";
	}
}
// end featured_image

	// }
// echo "string";


}

else{
		echo " not OKKK";
	}

?>