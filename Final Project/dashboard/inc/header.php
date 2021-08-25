<?php 
  require_once 'session.php';
  require_once '../db.php';

  $user_session_id=$_SESSION['id'];
  $select_users ="SELECT * FROM users WHERE id = '$user_session_id'";
  $select_users_query=mysqli_query($db,$select_users);
  $after_assoc_user=mysqli_fetch_assoc($select_users_query);

  $file_explode = explode('/', $_SERVER['PHP_SELF']);
  $end_file_ext = end($file_explode);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
   <!--  (.) dot mane holo (/) sleash er 1st dan pasher folder e dhuka (/) mane je folder e aso oikhan thakay ber hoia jaoa   -->
    <link href="../assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

 <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<script src="../assets/lib/jquery/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../assets/css/starlight.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="dashboard.php" class="sl-menu-link <?= $end_file_ext == 'dashboard.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-home tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        

        <a href="../index.php" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-globe tx-20"></i>
            <span class="menu-item-label">Home Page</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="users.php" class="sl-menu-link <?= $end_file_ext == 'users.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-users tx-20"></i>
            <span class="menu-item-label">Users</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

          <a href="settings.php" class="sl-menu-link <?= $end_file_ext == 'settings.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon  fa fa-wrench tx-20"></i>
            <span class="menu-item-label">Settings</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        

        <a href="educations.php" class="sl-menu-link <?= $end_file_ext == 'educations.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-graduation-cap tx-20"></i>
            <span class="menu-item-label">Educations</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="portfolios.php" class="sl-menu-link <?= $end_file_ext == 'portfolios.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fas fa-portrait tx-20"></i>
            <span class="menu-item-label">Portfolios</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="socials.php" class="sl-menu-link <?= $end_file_ext == 'socials.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-book tx-20"></i>
            <span class="menu-item-label">All Social</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="services.php" class="sl-menu-link <?= $end_file_ext == 'services.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-handshake-o tx-20"></i>
            <span class="menu-item-label">All Services</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

 
       

        <a href="contacts.php" class="sl-menu-link <?= $end_file_ext == 'contacts.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon fas fa-file-signature tx-20"></i>
            <span class="menu-item-label">Messages</span>
            
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="address.php" class="sl-menu-link <?= $end_file_ext == 'address.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fas fa-map-marked tx-20"></i>
            <span class="menu-item-label">Office Address</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="success.php" class="sl-menu-link <?= $end_file_ext == 'success.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fas fa-clipboard-check tx-20"></i>
           
            <span class="menu-item-label">Success</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->  

        <a href="upload.php" class="sl-menu-link <?= $end_file_ext == 'upload.php' ? 'bg-danger text-white' : ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fas fa-upload tx-20"></i>
   
           
            <span class="menu-item-label">Upload</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->  
        
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><span class="hidden-md-down">
               <?php echo $_SESSION['name'] ?>
              </span></span>
              <img src="upload/<?= $after_assoc_user['profile_image'] ?>" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="edit-profile.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href="change-password.php"><i class="icon fa fa-lock"></i> Change Password</a></li>
                <li><a href="../logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
            <?php 
                $contacts= "SELECT COUNT(*) as total_msg, id, name, message FROM contact WHERE status =1 ORDER BY id DESC"; 
                $contact_q= mysqli_query($db, $contacts);
                $contact_assoc =mysqli_fetch_assoc($contact_q);
            ?>
    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (<?= $contact_assoc['total_msg']  ?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (<?= $contact_assoc['total_msg']  ?>)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
<?php if($contact_assoc['total_msg']> 0) {
      foreach ($contact_q as $key => $contact): ?>   

          <a href="message-status.php?id=<?= $contact['id'] ?>" class="media-list-link">
            <div class="media">
              <!-- <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt=""> -->
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13"><?= $contact['name']?></p>
                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                <p class="tx-13 mg-t-10 mg-b-0"><?= $contact['message']?></p>
              </div>
            </div><!-- media -->
          </a>
           
      <?php 
        endforeach;
      }
      else{

        echo "<span>no massage</span>";
      }

       ?>


          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

