<!DOCTYPE html>
<html lang="en">
<?php 
ob_start();
error_reporting(0);
session_start();  
include("db.php");
$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];


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
              try{
                $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");	
		$sql = "select * from $tname where ImgId=$Id";
			
		$q2 = $pdo->query($sql);
		$q2->setFetchMode(PDO::FETCH_ASSOC);
		while($row=$q2->fetch())
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
                            <img src="<?php echo $filepath; ?>" alt="" style="height:500px; width:400px;">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt=""style="height:500px; width:400px;">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="" style="height:500px; width:400px;">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt=""style="height:500px; width:400px;">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="" style="height:140px; width:150px;" >
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt=""style="height:140px; width:150px;">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt=""style="height:140px; width:150px;">
                        </div>

                        <div class="product-preview">
                            <img src="<?php echo $filepath; ?>" alt="" style="height:140px; width:150px;">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-Brand"><?php echo $brand; ?></h2>
                        <h3 class="product-name"><?php echo $name; ?></h3>
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
                            <h3 class="product-price">₹ <?php print($price-$price*(0.1)); ?> <del class="product-old-price">₹ <?php echo $price; ?></del></h3>
                            <p >₹ <?php print($price*(0.1)); ?> save</p>
                            <span class="product-available">In Stock</span>
                        </div>
                        <div>
                        <h5>Available offers</h5>
                        <ul style="color:blue;">
                        <li>Bank OfferGet additional ₹1250 off on select HDFC Bank Credit Card transactionT&C </li> 
                        <li>Bank OfferGet additional ₹2000 off on HDFC Credit/Debit Card EMI transactionT&C </li>
                        <li>Bank Offer5% Cashback on Flipkart Axis Bank CardT&C </li>
                        <li>FreebieFree six (6) months Gaana Plus Subscription on Gaana appT&C </li>
                        <li>Partner OfferBuy this product and get upto ₹500 off on Flipkart FurnitureKnow More </li>
                        <li>No cost EMI ₹2,750/month. Standard EMI also availableView Plans </li>
                        <li>Special PriceGet extra ₹500 off (price inclusive of discount)T&C </li>
                        <li>Bank OfferGet additional 10% discount upto ₹1500 on SBI Credit and EMI transactionsT&C</li>
                        <li>Partner OfferSign up for Flipkart Pay Later and get Flipkart Gift Card worth ₹100* </li>
            </ul>
            </div>
            <div class="product-options">
                        <h5>Details</h5>
                        <p> <?php echo $detail; ?>.</p>
                        </div>
                        <div class="product-options">
                            <label>
                                Size: <?php echo $size; ?>
                                
                            </label>
                            <label>
                                Color: <?php echo $color; ?>
                                
                            </label>
                        </div>
                        <form  method="post">
                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" name='number' value=1 >
                                    
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <input type="submit" class="add-to-cart-btn" name='ATC' formmethod="post" value='add to cart'> 
                            
                        </div>
                        </form>

                        <ul class="product-btns">
                            <li><a href="wish.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>&email=<?php echo $email;?>"><i class="fa fa-heart-o"></i> Add to wishlist</a></li>
        
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
                        <?php }
                         }
	
                         catch (PDOException $e) {
                             die("Could not connect to the database $dbname :" . $e->getMessage());
                         } ?>

                    </div>
                </div>
                <!-- /Product details -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->


        <div class="section">
        <div class="container">
            <div class="row">
			<h2>Similar Products</h2>
                        <div class="products-tabs">
                            <!-- tab -->
                            <div>

                                <!-- product -->	
			<?php	
            try{
                $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");	
		$sql2 = "SELECT * FROM $tname where ImgId !=$Id LIMIT 4";
			
		$q2 = $pdo->query($sql2);
		$q2->setFetchMode(PDO::FETCH_ASSOC);
		while($row=$q2->fetch())
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
								
                                <div class="col-md-3 col-xs-8">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><img
                                                    src="<?php echo $filepath; ?>" style="height:270px; width:270px; padding: 20px 20px 20px 20px; "alt=""></a>
                                            <div class="product-label">

                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $tname; ?></p>
                                            <h3 class="product-name"><a
                                                    href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><?php echo $name; ?></a>
                                            </h3>
                                            <h4 class="product-price">₹ <?php print($price-$price*(0.1)); ?><del
                                                    class="product-old-price">₹ <?php echo $price; ?></del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <a
                                                    href="wish.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>&email=<?php echo $email;?>"><i
                                                        class="fa fa-heart" aria-hidden="true"></i></a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php }
                                }
	
                                catch (PDOException $e) {
                                    die("Could not connect to the database $dbname :" . $e->getMessage());
                                }
                                ?> 
										
                                <!-- /product -->

                                <!-- /tab -->
                            </div>
                        </div>

    

                        <!-- Products tab & slick -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
                            </div>
		


        <?php include('last.php'); ?>

</body>

</html>

<?php 
if($_POST["ATC"]=="add to cart"){
    $num= $_POST['number'];
    echo "email=$email&tname=$tname&id=$Id&brand=$brand&Quantity=$num&color=$color&size=$size&price=$price&img_path=$filepath";
    header("Location:ATC.php?email=$email&tname=$tname&id=$Id&brand=$brand&Quantity=$num&color=$color&size=$size&price=$price&img_path=$filepath");
}

?>