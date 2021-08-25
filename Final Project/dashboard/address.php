<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM office_address WHERE status = 1";
$query_data=mysqli_query($db,$select);


 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">Permanent Office</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">Permanent Office</h3>  

           <!--  <div class="text-right">
              
            <a href="service-add.php"><i class="fa fa-plus"></i> Add</a>
            </div>  -->

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Email</th>
                  
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Location</th>
                  <th>Summary</th>
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
                  <td><?= $value['email'];?></td>
                  
                  <td><?= $value['phone'];?></td>
                  <td><?= $value['address'];?></td>
                  <td><?= $value['location'];?></td>
                  <td><?= $value['summary'];?></td>
                  <td><?= $value['status'];?></td>
                  <td>
                    <a href="address-edit.php?id=<?= $value['id']?>" class="btn btn-primary" >Edit</a>
                    <!-- get method er shahajje table er id ta ber kora -->
          
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

 
