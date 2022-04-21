<?php
include('head.php');
//include('client_database.php');
?>
  <body>
<?php include("layout.php");?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Hello <?php echo $n; ?> ! This is Your Profile Page </h4>

              <!-- Basic Bootstrap Table -->
              <div class="card" style="  padding-bottom: 40px; padding-top: 20px; padding-left: 63px;">
             
                        
              <i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>Name: <?php echo $n;?><br>
              <b>Email</b>: <?php echo $e;?><br>
              <b>Password</b>: <?php echo $p;?><br>
              <b>Mobile</b>: <?php echo $m;?><br>
              <b>Address</b>: <?php echo $a;?><br><br>
              Edit your profile </strong><a href='C_edit.php?email=<?php echo $e;?>' ><i class='bx bx-edit-alt me-1'></i>Edit</a>
                       
                </div>
            </div>
    </div>


    <?php include('footer.php');?>
  </body>
</html>