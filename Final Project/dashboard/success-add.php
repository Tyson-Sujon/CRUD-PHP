<?php 
  require 'inc/header.php'; 
?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Add Success</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Success</h5>
         
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <form action="success-post.php" method="POST" >
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="icon" class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                   <!-- <input type="text" class="form-control" id="email" placeholder="fab fa-facebook" name="icon"> -->  

                   <select name="icon" id="icon" class="form-control">
                     <option value>Select Success</option>
                     <option value="flaticon-award">Feature Item
                     </option>
                     <option value="flaticon-like">Active product</option>
                     <option value="flaticon-event">Experience</option>
                     <option value="flaticon-woman">Client
                     </option>
                     <option value="fas fa-camera-retro">Photography</option>

                     <option value="fab fa-youtube">Videos</option>

                     <option value="fas fa-hand-holding-usd">Total Income</option>

                   </select>  

                              
                   </div>
              </div>
          
         <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Result: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="result" placeholder="Enter progress " name="result">
                </div>
              </div><!-- col-4 -->
              
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

 

