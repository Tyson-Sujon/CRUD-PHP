<?php 

require 'inc/header.php';
//require  'inc/footer.php';
  require_once "../db.php";
  $select= "SELECT * FROM users WHERE status = 1  ";
$query_data=mysqli_query($db,$select);

 ?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <!-- <a class="breadcrumb-item" href="index.html">Pages</a> -->
        <span class="breadcrumb-item active">All Users</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <?php 
                    if(isset($_SESSION['delete_user'])) { ?>
                      <div class="alert alert-danger">
                        <span>
                          <?php 
                          echo $_SESSION['delete_user'];
                          unset($_SESSION['delete_user']);

                           ?>

                        </span>
                      </div>

                 <?php }

                 if(isset($_SESSION['update_user'])) { ?>
                      <div class="alert alert-success">
                        <span>
                          <?php 
                          echo $_SESSION['update_user'];
                          unset($_SESSION['update_user']);

                           ?>

                        </span>
                      </div>

                 <?php }
              ?>
                    
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>User Role</th>
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
                  <td><?= $value['email'];?></td>
                  <td>
               <img width="60px" src="upload/<?= $value['profile_image'];?>">

                  </td>
                  <td class="text-center"><?php
                    if ($value['role']==1) {
                      echo "User";
                    }
                    elseif ($value['role']==2) {
                      echo "Employee";
                    }
                    else
                    {
                        echo "admin";
                    }
                  ?>
                    
                  </td>
                  <td>
                    <a href="user-edit.php?user_id=<?= $value['id']?>" class="btn btn-primary" >Edit</a>
                    <!-- get method er shahajje table er id ta ber kora -->
        <button  data-id="<?= $value['id']?>" class="btn btn-danger UserDelete">Delete </button>
                  </td>
                </tr>


                <?php }
              ?>
               
             
              </tbody>
            </table>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
  <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<script type="text/javascript">
  
  $('.UserDelete').click(function(){
    let id = $(this). attr("data-id");


    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });


    window.setTimeout(function(){
      window.location.href = 'user-delete.php?user_id='+id;
  }, 5000);

  } else {
    swal("Your imaginary file is safe!");
  }
});
  })

</script>



<?php 
require  'inc/footer.php';
 ?>

 
