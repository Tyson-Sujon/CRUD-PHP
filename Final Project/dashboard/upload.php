<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM images WHERE status = 1 ";
$query_data=mysqli_query($db,$select);

 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">All Upload</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">All Upload</h3>  

            <div class="text-right">
              
            <a href="upload-add.php"><i class="fa fa-plus"></i> Add</a>
            </div> 

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Summary</th>
                  <th>Logo</th>
                  <th>My Image</th>  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach ($query_data as $key => $value) { ?>
                  <!-- echo $value['name']; -->
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $value['title']?></td>
                  <td><?= $value['summary']?></td>
                  <td><?= $value['category']?></td>
              
                  <td><img width="50px" src="upload/all_image/<?= $value['logo']?>"></td>
                  <td><img width="50px" src="upload/cv/<?= $value['my_image']?>"></td>
                  
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

 
