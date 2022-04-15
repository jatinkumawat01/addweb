<?php 


ob_start();
error_reporting(0);
session_start();  

$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
	$sql = "SELECT * FROM $tname";
	$q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

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
								<div>
									
										<!-- product -->
								<?php
                                while($row=$q->fetch())
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
										<div class="col-md-4 col-xs-6">
										<div class="product">
											<div class="product-img">
											<a href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><img src="<?php echo $filepath; ?>" height=270px width=270px style='padding: 20px 20px 20px 20px; ' alt=""></a>
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
												<a href="wish.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>&email=<?php echo $email;?>"><i class="fa fa-heart" aria-hidden="true"></i></a>

													</div>
											</div>
											
										</div>
										</div>
                                        <?php } }
										catch (PDOException $e) {
											die("Could not connect to the database $dbname :" . $e->getMessage());
										}
										?>
										<!-- /product -->
									
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

<?php
	if(isset($_POST['ATC'])){
		//header("Location:ATC.php?");
	}

?>
