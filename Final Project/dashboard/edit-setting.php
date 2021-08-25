<?php 
require 'inc/header.php';
$id=$_GET['id'];
$select_count= "SELECT *  FROM settings WHERE id=$id";
$query_count=mysqli_query($db,$select_count);
$assoc= mysqli_fetch_assoc($query_count);

 ?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Edit Settings</span>
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
            <form action="update-settings.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$assoc['id']?>">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Tagline: <span class="tx-danger">*</span></label>
                   <input type="text" value="<?=$assoc['tagline']?>" class="form-control"id="tagline" placeholder="Enter Tagline" name="tagline">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                   <input type="email" class="form-control" value="<?=$assoc['email']?>" id="email" placeholder="Enter email" name="email">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" value="<?=$assoc['phone']?>" id="phone" placeholder="Enter phone" name="phone">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Office Address: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" value="<?=$assoc['office_address']?>" id="office_address" placeholder="Enter Office Address" name="office_address">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Copyright: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" value="<?=$assoc['copyright']?>" id="copyright" placeholder="Enter Copyright" name="copyright">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">About: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="about"><?=$assoc['about']?></textarea>
                </div>
              </div>

              <!-- <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" value="" id="email" placeholder="Enter email" name="email">
                </div>
              </div> -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="profile_image" class="form-control-label">Logo: <span class="tx-danger">*</span></label>
                   <input type="file" class="form-control"  id="logo" name="logo" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Logo preview: <span class="tx-danger">*</span></label>
                  <br> <img id="image_id" width="150px" src="upload/<?=$after_assoc['profile_image'] ?> ">
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

 

