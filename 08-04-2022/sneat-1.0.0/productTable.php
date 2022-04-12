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
                        <?php 
                          $sql="select * from category";
                          $query=mysqli_query($con,$sql) or die("Error in insert query");
                          while($row=mysqli_fetch_array($query))
                              {
                                  $tid=$row['C_id'];
                                  $c_name=$row['category_name']; 
                                  $tname=$row['category_tname'];
                              
                      
                        ?>
                      <tr>
                        <th scope="row">1</th>
                        <td><?php echo $c_name;?></td>
                        <td><a href='Padd.php?tname=<?php echo $tname;?>'>Add</a></td>
                        <td><a href='Pview.php?tname=<?php echo $tname;?>'>View</a></td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
              <?php include('footer.php');?>
  </body>
</html>