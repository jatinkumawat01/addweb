<?php 


ob_start();
error_reporting(0);
session_start();  

$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname ") or die("Error in query");

        include("head.php"); 
        ?>
	<body>

	<?php include("header.php"); ?>

    
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<!-- <div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Tv</a></li>
									<li><a data-toggle="tab" href="#tab3">Shoes</a></li>
									<li><a data-toggle="tab" href="#tab4">Laptop</a></li>
									<li><a data-toggle="tab" href="#tab5">T-Shirt</a></li>
									<li><a data-toggle="tab" href="#tab6">Shirt</a></li>
									<li><a data-toggle="tab" href="#tab7">Trouser</a></li>
									<li><a data-toggle="tab" href="#tab8">Jeans</a></li>
									
								</ul>
							</div>
						</div>
					</div> -->
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
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

										<div class="product">
											<div class="product-img">
												<img src="<?php echo $filepath; ?>" height=250 width=200 alt="">
												<div class="product-label">
													
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $tname; ?></p>
												<h3 class="product-name"><a href="view.php?tname=<?php echo $tname;?>"><?php echo $name; ?></a></h3>
												<h4 class="product-price">₹ <?php echo $price; ?> <del class="product-old-price">₹ <?php echo $price; ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<a href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button></a>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
                                        <?php } ?>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        

<?php include('last.php'); ?>

	</body>
</html>
