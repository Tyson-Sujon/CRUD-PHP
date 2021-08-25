<?php 
require 'inc/header.php';
//session_start();
require_once '../db.php'; 
$id = $_SESSION['id'];
$select="SELECT * FROM users WHERE id= $id";
$query= mysqli_query($db,$select);
$after_assoc=mysqli_fetch_assoc($query);
// $_SESSION['user_id']=$id;

//user-delete.php thakay edit button e click korle chole ashbe
//print_r($after_assoc['email']); 

 ?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Edit User</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Edit profile</h5>
          <!-- <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p> -->
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <form action="password-update.php" method="post">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Current Password: 
                    <span class="tx-danger">*</span></label>
                   <input type="password" name="current_password" class="form-control"  id="name" placeholder="Enter Current Password" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">New Password: 
                    <span class="tx-danger">*</span></label>
                   <input type="password" name= "new_password" class="form-control"  id="new_password" placeholder="Enter New Password" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Confirm Password: 
                    <span class="tx-danger">*</span></label>
                   <input type="password" class="form-control"  id="confirm_password" placeholder="Enter Confirm Password" name="confirm_password">
                </div>
              </div>
    

              
            </div><!-- row -->

            <div class="form-layout-footer">
              <input style="cursor: pointer;"  type="Submit" class="btn btn-info mg-r-5" value="Submit Form">
             <!--  <button class="btn btn-info mg-r-5">Submit Form</button> -->

              <!-- <button class="btn btn-secondary">Cancel</button> -->
            </div><!-- form-layout-footer -->
            </form>
          </div><!-- form-layout -->
        </div><!-- card -->

      

      </div><!-- sl-pagebody -->
     <!-- ---------------------footer -->
    </div>






			 <?php 
					require  'inc/footer.php';
			 ?>

 

