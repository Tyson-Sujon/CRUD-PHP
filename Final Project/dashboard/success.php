<!-- table name= item -->

<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM item WHERE status = 1";
$query_data=mysqli_query($db,$select);


 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">All Success</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">All Success</h3>  

            <div class="text-right">
              
            <a href="success-add.php"><i class="fa fa-plus"></i> Add</a>
            </div> 

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Icon</th>
                  <th>Result</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach ($query_data as $key => $value) { ?>
                  <!-- echo $value['name']; -->
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $value['name'];?></td>
                  <td class=" <?php echo $value['icon'] ?>" /></td>
                  <td><?= $value['result'];?></td>
                  <td><?= $value['status'];?></td>
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

 
