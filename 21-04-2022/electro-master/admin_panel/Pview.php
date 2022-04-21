<?php
include('head.php');
$tname2=$_REQUEST['tname'];
?>
  <body>
    <?php include('layout.php');?>
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
                        <th>Product Image</th>
                        <th>Product Id</th>
                        <th>Name</th>
                        <th>Brand</th>
                        
                        
                        <th>Price</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php 
                        $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
                        $query=mysqli_query($con,"select * from $tname2 where isActive=1") or die("Error in query");
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo "<td><img src=".$row['img_path']." height=50 width=50 /></td>";
                            $ID=$row["ImgId"];
                            echo " <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row["ImgId"]."</strong></td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["brand"]."</td>";
                            echo "<td>₹ ".(float) $row["price"]."</td>";
                            echo "<td><a  href='View.php?id=$ID&tname=$tname2' ><i class='bx bxs-inbox me-1'></i>View</a></td>";
                            echo "<td><a  href='P_edit.php?id=$ID&tname=$tname2' ><i class='bx bx-edit-alt me-1'></i> Edit</a></td>";
                            echo "<td><a  href='delete.php?id=$ID&tname=$tname2'><i class='bx bx-trash me-1'></i> Delete</a></td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>


        
<?php include('footer.php');?>
  </body>
</html>
