<?php include("head.php"); ?>

<body>
    <?php include('header.php') ;
		
		// try {
        //     include('db.php') ;
		// 	$sql="select * from category";
		// 	$q = $pdo->query($sql);
		// 	$q->setFetchMode(PDO::FETCH_ASSOC);
		?>


    <div class="sectiom">

        <div class="container">

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    
                </div>

   
            </div>
        </div>


    </div>
   
    <script>
	$.ajax({
		url: "slider.php",
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#myCarousel').html(data); 
		}
	});
</script>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div id="mysidbar" class="sidebar">
                  
                   
                </div>


                <script>
	$.ajax({
		url: "sidebarIndex.php",
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#mysidbar').html(data); 
		}
	});
</script>

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs" id="productDemo">
                            <!-- tab -->

                           
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

    <script>
	$.ajax({
		url: "productCategory.php",
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#productDemo').html(data); 
		}
	});
</script>
   

    

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