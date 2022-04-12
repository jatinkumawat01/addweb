
<?php
ob_start();
error_reporting(0);
session_start();  

$Email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student12 where email='$Email'") or die("Error in query");
while($row=mysqli_fetch_array($query))
        { 
            $username=$row['name'];
            $mobile=$row["mobile"];
            $address =$row["address"];
            $e=$row["email"];
            $pswd=$row["password"];
        } 

include('head.php');

?>  
<body>
<?php include("layout.php");?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?php echo "Hello ".$username;?></h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Client Data Edit form</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form method ='post'>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name='name' value='<?php echo $username;?>' />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-password">Password</label>
                          <div class="col-sm-10">
                            <input
                            type="text"
                            id="password"
                            name='password'
                            class="form-control"
                            name="password"
                            value="<?php echo $pswd;?>"
                            aria-describedby="password"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="email"
                                id="basic-default-email"
                                name='email'
                                class="form-control"
                                value="<?php echo $e;?>"
                                aria-label="<?php echo $e;?>"
                                aria-describedby="basic-default-email2"
                              />
                              <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                          <div class="col-sm-10">
                            <input
                              type="int"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                              name='mobile'
                              value="<?php echo $mobile;?>"
                              aria-label="<?php echo $mobile;?>"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-address">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-address"
                                name='address'
                                class="form-control"
                                value="<?php echo $address;?>"
                                aria-label="<?php echo $address;?>"
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" name='submit' class="btn btn-primary" value="Edit">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
<!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $n=$_POST['name'];
    $a=$_POST['address'];
    $m=$_POST['mobile'];
    $p=$_POST['password'];


$sql="update student12 set name='$n',address='$a',mobile='$m',password='$p' where email='$Email' ";
echo $sql;
$insert=mysqli_query($con,"update student12 set name='$n',address='$a',mobile='$m',password='$p' where email='$Email' ") or die("Error in update query");

header('Location:client_table.php');

mysqli_close($con);

}


?>