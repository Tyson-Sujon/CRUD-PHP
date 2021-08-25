<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM settings";
$query_data=mysqli_query($db,$select);

$select_count= "SELECT COUNT(*) as total FROM settings";
$query_count=mysqli_query($db,$select_count);
$assoc= mysqli_fetch_assoc($query_count);
// print_r($assoc);
// die();
 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">Settings</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">System Settings</h3>  

            <div class="text-right">
                 <?php if (!$assoc['total']>0): ?>
                 <a href="add-settings.php"><i class="fa fa-plus"></i> Add</a>          
                <?php endif ?>
            </div> 

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Tagline</th>
                  <th>About</th>
                  <th>Logo</th>
                  <th>Office_address</th>
                  <th>Email</th>
                  <th>Copyright</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach ($query_data as $key => $value) { ?>
                  <!-- echo $value['name']; -->
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $value['tagline'];?></td>
                  <td><?= $value['about'];?></td>
                  <td><?= $value['logo'];?></td>
                  <td><?= $value['office_address'];?></td>
                  <td><?= $value['email'];?></td>
                  <td><?= $value['copyright'];?></td>
                  <td><?= $value['phone'];?></td>
                  
                  <td>
                    <a href="edit-setting.php?id=<?= $value['id']?>" class="btn btn-primary" >Edit</a>
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

 
