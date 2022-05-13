<?php ob_start();
error_reporting(0);
session_start();
session_destroy();
include("db.php");
include("head.php");
?>

<body>
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
									<img src="./img/logo.png" alt="" style="height:97px; width:175px">
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
										<?php
										try {
											
											$SQL1="select * from category ";
											$q1 = $pdo->query($SQL1);
											$q1->setFetchMode(PDO::FETCH_ASSOC);
											while($row=$q1->fetch())
												{
													$tid=$row['C_id'];
													$c_name=$row['category_name']; 
													$tname2=$row['category_tname'];
													?>
										<option value="<?php echo $tid;?>"><?php echo $c_name;?>		</option>
										<?php }
										}
										
										catch (PDOException $e) {
											die("Could not connect to the database $dbname :" . $e->getMessage());
											}
										?>	
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
								<?php
							if(isset($_SESSION['email']))
						{
						?>
								<!-- Wishlist -->
								<div>
								<a href="wishlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<?php
										try {
											
											$SQL1="select sum(Quantity) as Wsum from wishList";
											$q1 = $pdo->query($SQL1);
											$q1->setFetchMode(PDO::FETCH_ASSOC);
											while($row1=$q1->fetch())
												{
													$Wsum=$row1['Wsum'];
												}
											}
										
										catch (PDOException $e) {
											die("Could not connect to the database $dbname :" . $e->getMessage());
											}
										?>	
										<div class="qty"><?php echo $Wsum;?></div>
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
								<?php }?>
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
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Login</h5>
                        </div>
                        <div class="address-form">
                            <form method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email"
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    <div class="form-check">

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <div>
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        <div class="signUp">
                                        <label class="forgot-password"><a href="signup.php">Signup<a></label>
                                        </div>
                                        <div class="admin">
                                        <label><a href="admin_panel/index12.php">Admin Panel<a></label>
                                        
                                        </div>
                                    </div>
                                    </div>

                                    <br>
                                    <input type="submit" class="btn btn-lg btn-block btn-success" name='signin'
                                        value='Sign in'>

                                        <div class="signUp">
                                        <label class="forgot-password"><a href="forgetPassword.php">Forget Password<a></label>
                                        </div>
                                </div>
                        
                        </form>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <?php include('last.php'); ?>

</body>
<style>
    .signup{
      margin-top: 28px;
        float: right;
    }
.admin {
    float: initial;
    margin-left: 295px;
    margin-right: 291px;
    background-color: #5cb85b;

    }
</style>

</html>
<?php

if ($_POST['signin']=='Sign in') {
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    echo $email;
    
    
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$sql="select  email from Customer where email='$email'and isActive=1 and password=$pswd ";
$query=mysqli_query($con,$sql) or die("Error in select query");

$rows=mysqli_num_rows($query);

if($rows>0){
    echo "Login Successful";
    
	
    session_start();
    $_SESSION["email"]=$email;
    
    header('Location:index12.php');

}
else{
    echo "<script>alert('Incorrect Username or password');</script>";
}
}

?>