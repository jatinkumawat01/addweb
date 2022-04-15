
<?php
include("db.php");
 ?>
<!-- HEADER -->
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
						<li><a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index12.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method='post'>
									<select class="input-select" name='select'>
										<option value="0">All Categories</option>
										<option value="1">Mobile		</option>
										<option value="2">Laptop</option>
										<option value="3">Tv</option>
										<option value="4">Shirt</option>
										<option value="5">T-shirt</option>
										<option value="6">Trouser</option>
										<option value="7">Shoes</option>
										<option value="8">Jeans</option>
									</select>
									<input class="input" name='input' placeholder="Search here">
									<input type='submit' class="search-btn" name='search' value='Search' >
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
								<a href="wishlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a href="Addtocart.php" >
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<?php
										try {
											
											$SQL1="select sum(Quantity) as Qsum from AddToCart";
											$q1 = $pdo->query($SQL1);
											$q1->setFetchMode(PDO::FETCH_ASSOC);
											while($row1=$q1->fetch())
												{
													$Qsum=$row1['Qsum'];
												}
											}
										
										catch (PDOException $e) {
											die("Could not connect to the database $dbname :" . $e->getMessage());
											}
										?>				
						<div class="qty"><?php echo $Qsum;?> </div>
									</a>
									
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index12.php">Home</a></li>
						<li><a href="index12.php">Hot Deals</a></li>
						<li><a href="productView.php?tname=shoes">Shoes</a></li>
						<li><a href="productView.php?tname=laptop">Laptops</a></li>
						<li><a href="productView.php?tname=mobile">Smartphones</a></li>
						<li><a href="productView.php?tname=Tv">Tv</a></li>
						<li><a href="productView.php?tname=tshirt">Tshirt</a></li>
						<li><a href="productView.php?tname=shirt">Shirt</a></li>
						<li><a href="productView.php?tname=trouser">Trouser</a></li>
						<li><a href="productView.php?tname=jeans">Jeans</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<?php
if ($_POST['search']=="Search"){
	$op=$_POST['select'];
	$search=$_POST['input'];
	echo "$op    $search "; ?>
	<!-- SECTION -->
	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								
									<div >
										<!-- product -->
<?php

	try {
	
	$sql="select * from category where category_name=:category_name or C_id=:C_id or category_tname=:category_tname";
	$q = $pdo->prepare($sql);
    $q->bindParam(':category_name', $search,PDO::PARAM_STR);
	$q->bindParam(':C_id', $op,PDO::PARAM_STR);
	$q->bindParam(':category_tname', $search,PDO::PARAM_STR);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
	while($row=$q->fetch())
		{
			$tid=$row['C_id'];
			$c_name=$row['category_name']; 
			$tname2=$row['category_tname'];

			$SQL1="select * from $tname2 where isActive=1 and ImgId=1";
			$q1 = $pdo->query($SQL1);
			$q1->setFetchMode(PDO::FETCH_ASSOC);
			while($row1=$q1->fetch())
			{
				$path1=$row1['img_path'];
				$n=$row1["name"];
				$b=$row1["brand"];
		
		

		?>
					
					<div class="col-md-4 col-xs-6">
										<div class="product">
											<div class="product-img">
											<a href="productView.php?tname=<?php echo $tname2;?>"><img src="<?php echo $path1;?>" height=250 width=270 style='padding: 20px 20px 20px 20px; ' alt=""></a>
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $c_name;?></p>
												<h3 class="product-name"><a href="#"><?php echo $n;?></a></h3>
												
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											
										</div>
										</div>
										<?php }
		}}
												 
												catch (PDOException $e) {
													die("Could not connect to the database $dbname :" . $e->getMessage());
												} ?>
										<!-- /product -->

										
									
									
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

<?php } ?>
