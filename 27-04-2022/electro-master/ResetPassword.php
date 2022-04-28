<?php
ob_start();
error_reporting(0);
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
                            <input type="text" name="pswd" class="form-control" id="exampleInputEmail1" placeholder="Enter new password">

                        </div>
                        <div class="form-group">
                            <input type="text" name="rpswd" class="form-control" id="exampleInputEmail1" placeholder="Enter Again password">

                        </div>
                        <br>
                        <input type="submit" class="btn btn-lg btn-block btn-success" name='reset' value='reset'>
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
if (isset($_POST['reset'])) {
    $pswd = $_POST["pswd"];
    $rpswd = $_POST["rpswd"];
    if ($pswd != $rpswd) {
        echo "<script>alert('Password Not match');</script>";
    } else {

        $email = $_REQUEST["email"];
        try {
            include("db.php");

            $sql = "update Customer set password= :pswd where email=:email";
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':pswd', $pswd, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $pdo->lastInsertId();
            if ($lastInsertId != "") {
                echo "Data Update Successfully";
                //header("Location:login.php");
            } else {
                echo "Error in Updateing";
            }
        } catch (PDOException $e) {
            die("Could not connect to the database :" . $e->getMessage());
        }
    }
}
?>