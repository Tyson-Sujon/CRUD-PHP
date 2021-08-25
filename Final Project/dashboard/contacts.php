<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM contact ";
$query_data=mysqli_query($db,$select);

 ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">All Messages</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
            <h3 class="text-center">All Messages</h3>  

       

             <table class="table table-bordered" >
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach ($query_data as $key => $value) { ?>
                  <!-- echo $value['name']; -->
                <tr <?php if ($value['status']==1): ?>
                    
                    style="font-weight: bold";

                <?php endif ?> >
                  <td><?= ++$key ?></td>
                  <td><?= $value['name'];?></td>
                  <td><?= $value['email'];?></td>
                  <td><?= $value['message'];?></td>
                  
                  <td>
                    <?php if ($value['status']==1): ?>
                        <a href="message-status.php?id=<?= $value['id']?>" class="btn btn-primary" >Read</a>
                      <?php else: ?>
                        <a href="message-status.php?id=<?= $value['id']?>" class="btn btn-info">Unread</a>
                    <?php endif ?>
                    
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

 
