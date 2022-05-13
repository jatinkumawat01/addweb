<?php
ob_start();
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

                <form method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                        </div>
                        <br>
                        <input type="submit" class="btn btn-lg btn-block btn-success" name='forget' value='forget'>
                </form>




                <?php

                if (isset($_POST['forget'])) {
                    echo "hello";
                    try {
                        $email = $_POST["email"];
                        $sql = "select  email from Customer where email='$email'and isActive=1";
                        $q1 = $pdo->query($sql);
                        $q1->setFetchMode(PDO::FETCH_ASSOC);
                        while ($row1 = $q1->fetch()) {
                            $em = $row1['email'];
                        }
                    } catch (PDOException $e) {
                        die("Could not connect to the database $dbname :" . $e->getMessage());
                    }


                    if ($em != "") {
                        header("Location:OTP.php?email=$email");

                        //$OTP = $_REQUEST['OTP'];

                ?>

                        <!-- <form method="post">
                           2 column grid layout with text inputs for the first and last names -->
                            <!-- <div class="row mb-4">

                                <div class="form-group">
                                    <input type="number" name="UserOTP" class="form-control" id="exampleInputOTP" aria-describedby="emailHelp" placeholder="Enter OTP">


                                </div>
                                <br>
                                <input type="submit" class="btn btn-lg btn-block btn-success" name='generate' value='Generate'> -->
                        <!-- </form> --> 

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

</body>

</html>
<?php
                        if (isset($_POST['generate'])) {
                            $userOtp = $_POST['UserOTP'];
                            if ($userOtp == $OTP) {
                                header("Location:ResetPassword.php?email=$em");
                            }
                        }
                    }
                 else {
                    echo "<script>alert('Incorrect Email');</script>";
                }
            }
?>