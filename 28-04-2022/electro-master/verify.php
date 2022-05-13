<?php 
ob_start();
error_reporting(0);
$email=$_REQUEST['email'];
include("head.php");
?>

<body>
    <?php include('header.php'); ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">

                        <div class="form-group">
                            <input type="number" name="UserOTP" class="form-control" id="exampleInputOTP" aria-describedby="emailHelp" placeholder="Enter OTP">


                        </div>
                        <br>
                        <input type="submit" class="btn btn-lg btn-block btn-success" name='generate' value='Verify'>
                </form>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

</body>

</html>
<?php
try{
    include("db.php");
    $sql="select OTP from Customer where email='$email'";
    $q = $pdo->query($sql);
					
    $q->setFetchMode(PDO::FETCH_ASSOC);

    while($row=$q->fetch())
    {
        $OTP=$row["OTP"];

    }

} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}



if (isset($_POST['generate'])) {
    $userOtp = $_POST['UserOTP'];


    echo "userOtp= $userOtp    OTP=$OTP";
    if ($userOtp == $OTP) {
        header("Location:ResetPassword.php?email=$email");
    }
}
?>