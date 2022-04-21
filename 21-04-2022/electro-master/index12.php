<?php include("head.php"); ?>

<body>
    <?php include('header.php') ;
		
		try {
            include('db.php') ;
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
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slider1.jpg" alt="1" style=" width: 1182px; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="img/slider2.jpg"alt="2" style=" width: 1182px; height: 450px;">
                        </div>

                        <div class="item">
                            <img src="img/slider3.jpg" alt="3" style=" width: 1182px; height: 450px;">
                        </div>
                        <div class="item">
                            <img src="img/slider.jpg" alt="3" style=" width: 1182px; height: 450px;">
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
                    <form method="post" style="padding-left:40px">
                        <h3>Categories</h3>
                        <?php


while($row3=$q->fetch())
{
	
	$c_name3=$row3['category_name']; 
	$tname3=$row3['category_tname'];
	?>
                        <input type="radio" name="Categories" value=<?php echo $tname3;?>>
                        <label for="<?php echo $tname3;?>"> <?php echo $c_name3;?></label><br>
                        

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

                <!-- <div id="main">
                    <button class="openbtn" onclick="openNav()">☰ Filter</button>
                </div> -->

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
                                                    src="admin_panel/<?php echo $path1;?>" height=250 width=270
                                                    style='padding: 20px 20px 20px 20px; ' alt=""></a>
                                            <div class="product-label">
                                                <span class="sale">-10%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $c_name;?></p>
                                            <h3 class="product-name" style="white-space: nowrap; width: 220px; overflow: hidden; text-overflow:ellipsis; padding-left:22px;"><a href="#"><?php echo $n;?></a></h3>

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
                                                    src="admin_panel/<?php echo $filepath; ?>" height=270px width=270px
                                                    style='padding: 20px 20px 20px 20px; ' alt=""></a>
                                            <div class="product-label">

                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><h4><?php echo $brand;?></h4></p>
                                            <h3 class="product-name" style="white-space: nowrap; width: 240px; overflow: hidden; text-overflow:ellipsis; padding-left:22px;"><a
                                                    href="productView.php?tname=<?php echo $tname4;?>"><?php echo $name; ?></a>
                                            </h3>
                                            
                                            <h4 class="product-price">₹ <?php print($price-$price*(0.1)); ?>  <del
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