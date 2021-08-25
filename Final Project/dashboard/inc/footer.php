   <?php 

 require_once "../db.php";
  $select= "SELECT * FROM socials WHERE status = 'active' ";
$query_data=mysqli_query($db,$select);

    ?>


   <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright © <?= date ('Y');?>. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          

            <?php foreach ($query_data as $key => $value): ?>
              
          <a class="pd-x-5" href="<?php echo $value['link'] ?>"><i class="<?php echo $value['icon'] ?> tx-20"></i></a>

            <?php endforeach ?>

            
        </div>
      </footer> 



   <!-- <script src="../assets/lib/jquery/jquery.js"></script> -->
    <script src="../assets/lib/popper.js/popper.js"></script>
    <script src="../assets/lib/bootstrap/bootstrap.js"></script>
    <script src="../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="../assets/js/starlight.js"></script>

<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

	    <script type="text/javascript">$(document).ready( function () {
	    $('#myTable').DataTable();
		} );</script>

  </body>
</html>
