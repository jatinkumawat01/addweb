<?php 
error_reporting(0);
include("head.php");
include("db.php"); ?>

<body>
    <?php include('header.php'); ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            <?php

try {

  $sql = "select * from Customer ";
  $q = $pdo->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $q->fetch()) {
    
    $name = $row['name'];
    $email = $row['email'];

    $mobile = $row['mobile'];
    $area = $row['area'];
    $city = $row['city'];
    $state = $row['state'];

    $landmark = $row['landmark'];
    $pincode = $row['pincode'];
    $address_type = $row['address_type'];
  }

?>
                <div class="jumbotron text-center">
                    <h1 class="display-3">Order placed, Thank You!</h1>
                    <p class="lead"><strong>Please check your email</strong><br>
                <?php echo "Shipping to $name, $area, $city, $state "; ?>
                </p>
                    <hr>
                    <p>
                
                    </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-sm" href="index12.php" role="button">Continue Shopping</a>
                    </p>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <?php 
            } catch (PDOException $e) {
              die("Could not connect to the database $dbname :" . $e->getMessage());
            } ?>




</body>

</html>