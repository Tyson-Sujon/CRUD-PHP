<?php 
  require 'inc/header.php'; 
?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Service</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Service</h5>
          <!-- <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p> -->
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <form action="service-post.php" method="post" >
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
                     <option value>Select Social</option>
                     <option value="fab fa-react">Creative Design
                     </option>
                     <option value="fab fa-free-code-camp">Features</option>
                     <option value="fal fa-edit">Edit</option>
                     <option value="fal fa-desktop">Responsive
                     </option>
                   </select>  

                              
                   </div>
              </div>
          
          <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" >summary: <span class="tx-danger">*</span></label>
                   <!-- <input type="text" class="form-control" id="link" placeholder="facebook.com" name="link"> -->

                   <textarea class="form-control" name="summary" id="summary">
                     
                   </textarea>
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

 

