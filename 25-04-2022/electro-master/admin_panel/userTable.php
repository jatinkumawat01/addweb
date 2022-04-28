<?php
include('head.php');
?>

<body>
    <?php include('layout.php');?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <!--/ Responsive Table -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> User Tables</h4>

        <!-- Responsive Table -->
        <div class="card">
            <h5 class="card-header">User Info Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>CoustomerId</th>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Mobile</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Landmark</th>
                            <th>Pincode</th>
                            <th>Address_type</th>
                            <th>IsActive</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $sql="select * from Customer";
                          $query=mysqli_query($con,$sql) or die("Error in insert query");
                          while($row=mysqli_fetch_array($query))
                              {
                                  $Cid=$row['CoustomerId'];
                                  $name=$row['name']; 
                                  $email=$row['email'];
                                  $password=$row['password'];
                                  $mobile=$row['mobile']; 
                                  $area=$row['area'];
                                  $city=$row['city'];
                                  $state=$row['state'];

                                  $landmark=$row['landmark'];
                                  $pincode=$row['pincode'];
                                  $address_type=$row['address_type']; 
                                  $isActive=$row['isActive'];
                              
                      
                        ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $Cid;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $password;?></td>
                            <td><?php echo $mobile;?></td>
                            <td><?php echo $area;?></td>
                            <td><?php echo $city;?></td>
                            <td><?php echo $state;?></td>
                            <td><?php echo $landmark;?></td>
                            
                            <td><?php echo $pincode;?></td>
                            <td><?php echo $address_type;?></td>
                            <td><?php echo $isActive;?></td>
                            <!-- <td><a href='Padd.php?tname=<?php echo $tname;?>'>Add</a></td>
                                <td><a href='Pview.php?tname=<?php echo $tname;?>'>View</a></td> -->

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

              <?php include('footer.php');?>
  </body>
</html>