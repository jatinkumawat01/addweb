<?php
include('head.php');
$tname=$_REQUEST['tname'];
$id=$_REQUEST['id'];
?>
  <body>
    <?php include('layout.php');?>
<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo $tname; ?> /</span> Basic View</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
              <?php 
                        $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
                        $query=mysqli_query($con,"select * from $tname where ImgId=$id") or die("Error in query");
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<td><img src=".$row['img_path']." height=400 width=400 /><br>";
                            echo " <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>Image Id: ".$row["ImgId"]."</strong><br>";
                            echo $row["name"]."-";
                            echo $row["brand"]."-";
                            echo $row["size"]."-";
                            echo $row["color"]."-";
                            echo $row["detail"]."<br>";
                            echo $row["price"]."Rs. <br>";
                        }
                        mysqli_close($con);
                        ?>
                </div>
            </div>
    </div>