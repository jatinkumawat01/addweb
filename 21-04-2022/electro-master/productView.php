<?php 


ob_start();
error_reporting(0);
session_start();  

$tname=$_REQUEST['tname'];
$checkP=$_REQUEST['checkp'];
$checkB=$_REQUEST['checkb'];
if ($checkP==500){
	$start=0;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 0 and 500";
}
else if($checkP==1000){
	$start=500;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 500 and 1000";
}
else if($checkP==5000){
	$start=1000;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 1000 and 5000";
}
else if($checkP==15000){
	$start=5000;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 5000 and 15000";
}
else if($checkP==50000){
	$start=15000;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 15000 and 50000";
}
else if($checkP=="above"){
	$start=50000;
	$checkP==500000;
	$sql = "SELECT * FROM $tname where brand='$checkB' or price between 50000 and 500000";
}
else if(isset($checkB)){
    $sql = "SELECT * FROM $tname where brand='$checkB' ";
}
else{
	$sql = "SELECT * FROM $tname";

}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
	//$sql = "SELECT * FROM $tname where between :start1 and :checkP";
	
		
	
        include("head.php"); 
        ?>

<body>

    <?php include("header.php"); 
	
	?>




    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div id="mySidebar" class="sidebar">
          
                    <form method="post">
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
                        <h3>Brand</h3>
                        <?php
                        $sql2="SELECT Distinct brand FROM $tname";
                        $p = $pdo->query($sql2);
                        $p->setFetchMode(PDO::FETCH_ASSOC);
                        while($r=$p->fetch())
                        { 
                            $b =$r["brand"];
                            ?>

                        <input type="radio" id="<?php echo $b;?>" name="brand_range" value=<?php echo $b;?>>
                        <label for="0-500"><?php echo $b;?></label><br>
                            <?php
                        }
                        ?>

                        <input type="submit" name="submit" value="Apply">

                    </form>

                </div>

                <div id="main">
                  
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div>

                                <!-- product -->
                                <?php
                                $q = $pdo->query($sql);
                                $q->setFetchMode(PDO::FETCH_ASSOC);
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
                                <div class="col-md-3 col-xs-6">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><img
                                                    src="admin_panel/<?php echo $filepath; ?>" height=260px width=260px
                                                    style='padding: 10px 10px 10px 10px; ' alt=""></a>
                                            <div class="product-label">

                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><h4><?php echo $brand;?></h4></p>
                                            <h3 class="product-name" >
                                                <div style="white-space: nowrap; width: 220px; overflow: hidden; text-overflow:ellipsis; padding-left:22px;">
                                                <a href="view.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>"><?php echo $name; ?></a></div>
                                            </h3>
                                            <h4 class="product-price">₹ <?php print($price-$price*(0.1)); ?> <del
                                                    class="product-old-price">₹ <?php print($price); ?></del></h4>
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
                                <?php } }
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

                                    </div>
        <?php include('last.php'); ?>

</body>

</html>
<?php
	if(isset($_POST['ATC'])){
		//header("Location:ATC.php?");
	}

	if(isset($_POST['submit'])){
		$checkP=$_POST['price_range'];
        $checkb=$_POST['brand_range'];
		$Categories=$_POST['Categories']; 
		header("Location:productView.php?tname=$tname&checkp=$checkP&checkb=$checkb");
		//echo "price range= $checkP and Categories= $Categories";
	}

?>