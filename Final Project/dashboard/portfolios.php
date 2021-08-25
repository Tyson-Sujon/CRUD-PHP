<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM portfolios WHERE status = 1";
$query_data=mysqli_query($db,$select);

 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">All Services</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">All Portfolios</h3>  

            <div class="text-right">
              
            <a href="portfolio-add.php"><i class="fa fa-plus"></i> Add</a>
            </div> 

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Summary</th>
                  <th>Thumbnail</th>
                  <th>Featured</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach ($query_data as $key => $value) { ?>
                  <!-- echo $value['name']; -->
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $value['title'];?></td>
                  <td><?= $value['category'];?></td>
                  <td><?= $value['summary'];?></td>
                  <td><img width="100px" src="upload/thumbnail/<?= $value['thumbnail']?>"></td>
                  <td><img width="100px" src="upload/featured_image/<?= $value['featured_image']?>"></td>
                  
                  <td>
                    <a href="service-edit.php?id=<?= $value['id']?>" class="btn btn-primary" >Edit</a>
                    <!-- get method er shahajje table er id ta ber kora -->
          <button  data-id="<?= $value['id']?>" class="btn btn-danger UserDelete">Delete </button>
                  </td>
                </tr>


                <?php } ?>
            
               
             
              </tbody>
            </table>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
  <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php 
require  'inc/footer.php';
 ?>

 
