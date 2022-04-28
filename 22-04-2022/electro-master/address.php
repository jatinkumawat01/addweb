<?php



ob_start();
error_reporting(0);
session_start();
$email = $_SESSION['email'];
$tname = $_REQUEST['tname'];
include("db.php");

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
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}


include("head.php"); ?>

<body>
    <?php include('header.php') ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Biling Address</h5>
                        </div>
                        <div class="address-form">
                            <form method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="form7Example1">Name</label>
                                            <input type="text" name="name" id="form7Example1" class="form-control" value="<?php echo $name; ?>" />

                                        </div>
                                    </div>
                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example6">Phone</label>
                                        <input type="number" name='mobile' id="form7Example6" class="form-control" value="<?php echo $mobile; ?>" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example2">Area</label>
                                        <input type="text" name="area" id="form7Example2" class="form-control" value="<?php echo $area; ?>" />
                                    </div>


                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example3">City</label>
                                        <input type="text" name="city" id="form7Example3" class="form-control" value="<?php echo $city; ?>" />

                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">State</label>
                                        <input type="text" name="state" id="form7Example4" class="form-control" value="<?php echo $state; ?>">

                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example3">Landmark</label>
                                        <input type="text" name="landmark" id="form7Example3" class="form-control" value="<?php echo $landmark; ?>">

                                    </div>
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example3">Pincode</label>
                                        <input type="number" name="pincode" id="form7Example3" class="form-control" value="<?php echo $pincode; ?>">

                                    </div>
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">Address Type</label><br>
                                        <input type="radio" id="home" name="Address_type" value="home">
                                        <label for="home"> Home (All day delivery)</label><br>
                                        <input type="radio" id="work" name="Address_type" value="work">
                                        <label for="work"> Work (Delivery between 10 AM - 5 PM)</label><br>

                                    </div>
                                    <input type="submit" name="submit" value="Add Address" class="btn btn-primary btn-lg btn-block">

                                    </button>
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

</html>
<?php
if (isset($_POST['submit'])) {
    if ($_POST['Address_type'] == "") {
        $addressType = $address_type;
    } else {
        $addressType = $_POST['Address_type'];
    }
    $area = $_POST['area'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $landmark = $_POST['landmark'];

    $pincode = $_POST["pincode"];
    //echo " $email     $tname  $name   $city   $mobile $addressType   $pincode   $landmark    $state ";
    try {
        // $sql = "insert into order(customer_email,customer_name,customer_Id,product_id,product_img,product_price,product_brand,product_category,product_size,product_color,product_quantity,mobile,area,city,state,landmark,Address_type,order_Id) values(:customer_email,:customer_name,:customer_Id,:product_id,:product_img,:product_price,:product_brand,:product_category,:product_size,:product_color,:product_quantity,:mobile,:area,:city,:state,:landmark,:Address_type,:order_Id)";
        $sql = "update $tname set area = :area, mobile= :mobile, city= :city, state= :state ,landmark= :landmark, pincode= :pincode , address_type= :addresstype  where email=:email";
        //$sql12 = "update $tname set area = '$area', mobile= $mobile, city= '$city', state= '$state' ,landmark= '$landmark', pincode= $pincode , address_type= '$addressType'  where email='$email'";
        echo "<br>  $sql12";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':area', $area, PDO::PARAM_STR);
        $query->bindParam(':city', $city, PDO::PARAM_STR);
        $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query->bindParam(':state', $state, PDO::PARAM_STR);
        $query->bindParam(':landmark', $landmark, PDO::PARAM_STR);
        $query->bindParam(':pincode', $pincode, PDO::PARAM_STR);
        $query->bindParam(':addresstype', $addressType, PDO::PARAM_STR);

        //$q->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $lastInsertId = $pdo->lastInsertId();
        if ($lastInsertId != "") {
            echo "Data Update Successfully";
            header("Location:address1.php");
        } else {
            echo "Error in Updateing";
        }
    } catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
    }
}
?>