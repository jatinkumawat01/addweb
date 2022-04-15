<?php
include('head.php');
?>

<body>
    <?php include('layout.php');?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Client Tables</h4>

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
        </div>
    </div>
    <!--/ Responsive Table -->


    <?php include('footer.php');?>
</body>

</html>