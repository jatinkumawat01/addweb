<?php 
ob_start();
error_reporting(0);
session_start();  

$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname where ImgId=$Id ") or die("Error in query");

include("head.php"); 
?>

<body>

    <?php include("header.php"); ?>

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            <?php
            while($row=mysqli_fetch_array($query))
            { 
                $id=$row['ImgId'];
                $filepath=$row["img_path"];
                $brand =$row["brand"];
                $size=$row["size"];
                $color=$row["color"];
                $name=$row["name"];
                $detail=$row["detail"];
                $price=$row["price"];
            
            
            ?>
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"><?php echo $name; ?></h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">₹ <?php echo $price; ?> <del class="product-old-price">₹ <?php echo $price; ?></del></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p> <?php echo $detail; ?>.</p>

                        <div class="product-options">
                            <label>
                                Size: <?php echo $size; ?>
                                
                            </label>
                            <label>
                                Color: <?php echo $color; ?>
                                
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <?php } ?>

                    </div>
                </div>
                <!-- /Product details -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <?php include('last.php'); ?>

</body>

</html>