<?php
include('head.php');
?>
  <body>
    <?php include('layout.php');?>
    <!-- Responsive Table -->
    <div class="card">
                <h5 class="card-header">Product Categories Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Product Categories</th>
                        <th>Add</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mobile</td>
                        <td><a href='Padd.php?tname=mobile'>Add</a></td>
                        <td><a href='Pview.php?tname=mobile'>View</a></td>
                        
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Laptop</td>
                        <td><a href='Padd.php?tname=laptop'>Add</a></td>
                        <td><a href='Pview.php?tname=laptop'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Tv</td>
                        <td><a href='Padd.php?tname=Tv'>Add</a></td>
                        <td><a href='Pview.php?tname=Tv'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Shirt</td>
                        <td><a href='Padd.php?tname=tv'>Add</a></td>
                        <td><a href='Pview.php?tname=tv'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Tshirt</td>
                        <td><a href='Padd.php?tname=tshirt'>Add</a></td>
                        <td><a href='Pview.php?tname=tshirt'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Trouser</td>
                        <td><a href='Padd.php?tname=trouser'>Add</a></td>
                        <td><a href='Pview.php?tname=trouser'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Shoes</td>
                        <td><a href='Padd.php?tname=trouser'>Add</a></td>
                        <td><a href='Pview.php?tname=trouser'>View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>Jeans</td>
                        <td><a href='Padd.php?tname=jeans'>Add</a></td>
                        <td><a href='Pview.php?tname=jeans'>View</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
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