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
                        <td><a href='Padd.php?tname=shirt'>Add</a></td>
                        <td><a href='Pview.php?tname=shirt'>View</a></td>
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
                        <td><a href='Padd.php?tname=shoes'>Add</a></td>
                        <td><a href='Pview.php?tname=shoes'>View</a></td>
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
              <?php include('footer.php');?>
  </body>
</html>  