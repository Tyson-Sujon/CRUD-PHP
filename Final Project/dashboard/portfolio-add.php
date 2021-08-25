<?php 
  require 'inc/header.php'; 
  session_start();
?>


    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Forms</a> -->
        <span class="breadcrumb-item active">Portfolio</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <?php if (isset($_SESSION['FormErr'])): ?>
            <div class="alert alert-danger">
              <span>
                <?php 
                  echo $_SESSION['FormErr'];
                  unset($_SESSION['FormErr']);

                 ?>
              </span>

            </div>
            
          <?php endif ?>
          

          <h5>Add Portfolio</h5>
          
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p> -->
          
          <div class="form-layout">
            <form action="portfolio-post.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="year" class="form-control-label">Title: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="category" class="form-control-label">Category: <span class="tx-danger">*</span></label>
                   <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="thumbnail" class="form-control-label">Thumbnail: <span class="tx-danger">*</span></label>
                   <input type="file" class="form-control" id="thumbnail"  name="thumbnail">
                  
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="featured_image" class="form-control-label">Featured Image: <span class="tx-danger">*</span></label>
                   <input type="file" class="form-control" id="featured_image"  name="featured_image">
                   
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group">
                  <label for="summary" class="form-control-label">Summary: <span class="tx-danger">*</span></label>
                   <textarea name="summary" id="summary" class="form-control"></textarea>
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

 

