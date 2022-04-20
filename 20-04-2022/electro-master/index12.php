<?php include("head.php"); ?>

<body>
    <?php include('header.php') ;
		
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
			$sql="select * from category";
			$q = $pdo->query($sql);
			$q->setFetchMode(PDO::FETCH_ASSOC);
		?>
    <div class="sectiom">

        <div class="container">

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slider1.jpg" alt="Los Angeles" style=" width: 1182px; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="data:image/jpeg;base64,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" alt="Chicago" style=" width: 1182px; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="http://valsoftech.com/inet/images/slider/sld5.jpg" alt="New York" style=" width: 1182px; height: 450px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
        </div>


    </div>






    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <form method="post">
                        <h3>Categories</h3>
                        <?php


while($row3=$q->fetch())
{
	
	$c_name3=$row3['category_name']; 
	$tname3=$row3['category_tname'];
	?>
                        <input type="radio" name="Categories" value=<?php echo $tname3;?>>
                        <label for="<?php echo $tname3;?>"> <?php echo $c_name3;?></label><br>
                        <!-- <input type="radio"  name="Categories" value="mobile">
  <label for="mobile">Mobiles</label><br>
  <input type="radio"  name="Categories" value="laptop">
  <label for="laptop"> Laptops</label><br>
  <input type="radio"  name="Categories" value="shoes">
  <label for="shoes"> Shoes</label><br>
  <input type="radio"  name="Categories" value="tshirt">
  <label for="tshirt"> Tshirt</label><br>
  <input type="radio"  name="Categories" value="shirt">
  <label for="shirt"> Shirt</label><br>
  <input type="radio"  name="Categories" value="trouser">
  <label for="trouser"> Trouser</label><br>
  <input type="radio"  name="Categories" value="jeans">
  <label for="jeans"> Jeans</label><br> -->

                        <?php }
	}
		
			catch (PDOException $e) {
				die("Could not connect to the database $dbname :" . $e->getMessage());
			} ?>

                        <h3>Price</h3>
                        <input type="radio" id="0-500" name="price_range" value=500>
                        <label for="0-500"> 0-500</label><br>
                        <input type="radio" id="500-1000" name="price_range" value=1000>
                        <label for="500-1000"> 500-1000</label><br>
                        <input type="radio" id="1000-5000" name="price_range" value=5000>
                        <label for="1000-5000"> 1000-5000</label><br><br>
                        <input type="radio" id="5000-15000" name="price_range" value=15000>
                        <label for="5000-15000"> 5000-15000</label><br><br>
                        <input type="radio" id="15000-50000" name="price_range" value=50000>
                        <label for="15000-50000"> 15000-50000</label><br><br>
                        <input type="radio" id="50000<" name="price_range" value="above">
                        <label for="50000<"> above 50k</label><br><br>


                        <input type="submit" name="submit" value="Apply">

                    </form>

                </div>

                <div id="main">
                    <button class="openbtn" onclick="openNav()">☰ Filter</button>
                </div>

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->

                            <div>
                                <!-- product -->
                                <?php 
										try {
											$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
										
										$sql="select * from category";
										$q = $pdo->query($sql);
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

                                <div class="col-md-3 col-xs-8">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="productView.php?tname=<?php echo $tname2;?>"><img
                                                    src="<?php echo $path1;?>" height=250 width=270
                                                    style='padding: 20px 20px 20px 20px; ' alt=""></a>
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
										}
												} 
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
    <!-- 4 image view page -->
   

    

			<?php
	try {
	$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
	
	$sql3="select * from category";
	$q = $pdo->query($sql3);
	$q->setFetchMode(PDO::FETCH_ASSOC);

	
	while($row=$q->fetch())
		{
		//$tid=$row['C_id'];
		$c_name=$row['category_name']; 
		$tname4=$row['category_tname'];

		?>			
		<div class="section">
        <div class="container">
            <div class="row">
			<h2><?php echo $c_name;?></h2>
                        <div class="products-tabs">
                            <!-- tab -->
                            <div>

                                <!-- product -->	
			<?php		
		$sql2 = "SELECT * FROM $tname4 where ImgId between 1 and 4";
			
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
                                            <a href="productView.php?tname=<?php echo $tname4;?>"><img
                                                    src="<?php echo $filepath; ?>" height=270px width=270px
                                                    style='padding: 20px 20px 20px 20px; ' alt=""></a>
                                            <div class="product-label">

                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $tname4; ?></p>
                                            <h3 class="product-name"><a
                                                    href="productView.php?tname=<?php echo $tname4;?>"><?php echo $name; ?></a>
                                            </h3>
                                            <h4 class="product-price">₹ <?php echo $price; ?> <del
                                                    class="product-old-price">₹ <?php echo $price; ?></del></h4>
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
       
			<?php }
	}
	catch (PDOException $e) {
		die("Could not connect to the database $dbname :" . $e->getMessage());
	}
	?>


    <!-- 4 image close page -->

  

    <?php include('last.php'); ?>

</body>

</html>

<?php
	if(isset($_POST['ATC'])){
		//header("Location:ATC.php?");
	}

	if(isset($_POST['submit'])){
		$checkP=$_POST['price_range'];
		$Categories=$_POST['Categories']; 
		header("Location:productView.php?tname=$Categories&checkp=$checkP");
		echo "price range= $checkP and Categories= $Categories";
	}

?>