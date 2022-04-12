<?php
include('client_database.php');
include('head.php');
?>  
<body>
<?php include("layout.php");?>

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php 
                        $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
                        $query=mysqli_query($con,"select * from student12") or die("Error in query");
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo " <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row["name"]."</strong><br><h7>".$row["email"]."</h7></td>";
                            echo "<td>".$row["mobile"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            echo "<td><span class='badge bg-label-primary me-1'>Active</span></td>";
                            echo "<td><div class='dropdown'>";
                            echo "<a class='dropdown-item' href='C_edit.php?email=".$row['email']."' ><i class='bx bx-edit-alt me-1'></i> Edit</a>";
                            echo "<a class='dropdown-item' href='delete.php?email=".$row['email']."&Tname=student12'><i class='bx bx-trash me-1'></i> Delete</a>";
                            echo "</div></td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>


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