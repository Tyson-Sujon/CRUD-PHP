<?php 
  require 'inc/header.php'; 
?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Education</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Education</h5>
          <!-- <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p> -->
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <form action="education-post.php" method="post" >
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="year" class="form-control-label">Title: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="title" class="form-control-label">Year: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="year" placeholder="Enter year" name="year">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="title" class="form-control-label">Progress: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="progress" placeholder="Enter progress" name="progress">
                   <span class="tx-danger">only use number *</span>
                </div>
              </div><!-- col-4 -->

              
          
          <!-- <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" >summary: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="link" placeholder="facebook.com" name="link">

                  <textarea class="form-control" name="summary" id="summary">
                     
                   </textarea>
                </div>
              </div> -->
              
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

 

