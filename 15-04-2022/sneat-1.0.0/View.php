<?php
include('head.php');
$tname1=$_REQUEST['tname'];
$id=$_REQUEST['id'];
?>

<body>
    <?php include('layout.php');?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo $tname1; ?> /</span> Basic View
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Product Details</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                            <?php 
                            $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
                            $query=mysqli_query($con,"select * from $tname1 where ImgId=$id ,isActive=1") or die("Error in query");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                                <img src=<?php echo $row['img_path'];?> height=200 width=200 />
                        </div>
                    <div class="col-md-4 col-sm-6">

                            <h5>Image Id: <?php echo $row["ImgId"]; ?><br>
                                Name: <?php echo $row["name"]; ?><br>
                                Brand: <?php echo $row["brand"]; ?><br>
                                Size: <?php echo $row["size"]; ?><br>
                                Color: <?php echo $row["color"]; ?><br>
                                Details: <?php echo $row["detail"]; ?><br>
                                Price: <?php echo $row["price"]; ?>Rs.</h5> 
                        

                            <?php
                            }
                            mysqli_close($con);
                            ?>
                        </div>
                </div>
                  
                
            </div>
        </div>
      </div>
      


<?php include('footer.php');?>
</body>

</html>