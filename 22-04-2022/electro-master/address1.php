<?php



ob_start();
error_reporting(0);
session_start();
$email = $_SESSION['email'];
$tname = $_REQUEST['tname'];
include("db.php");

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
              <h4 class="mb-0">Biling Address view</h4>
            </div>
            <?php

            try {

              $sql = "select * from Customer ";
              $q = $pdo->query($sql);
              $q->setFetchMode(PDO::FETCH_ASSOC);

              while ($row = $q->fetch()) {
                $Cid = $row['CoustomerId'];
                $name = $row['name'];
                $email = $row['email'];

                $mobile = $row['mobile'];
                $area = $row['area'];
                $city = $row['city'];
                $state = $row['state'];

                $landmark = $row['landmark'];
                $pincode = $row['pincode'];
                $address_type = $row['address_type'];


            ?>
                <div class="addressShow">
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          Your Address
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <div class="address">
                            <h6><?php echo " User name: $name <br> Email: $email <br> Mobile: $mobile <br> Area: $area <br> City: $city <br> State: $state  <br> Landmark: $landmark <br> Pincode: $pincode  <br> Address Type: $address_type "; ?>

                            </h6>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            <?php }
            } catch (PDOException $e) {
              die("Could not connect to the database $dbname :" . $e->getMessage());
            } ?>


          </div>
        </div>
      </div>

    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h4 class="mb-0">Placed Order</h4>
            </div>
            <form method="post">
            <div class="form-outline mb-4">
                <label class="form-label" for="form7Example4">Payment Type</label><br>
                <input type="radio" id="POD" name="Payment_type" value="POD">
                <label for="home"> Pay On Delivery)</label><br>
          
            </div>
            <input type="submit" name="submit" value="BUY NOW" class="btn btn-primary btn-lg btn-block">

            </button>
            </form>


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
  $paymentType = $_POST['Payment_type'];
  header("Location:welcome.php");
}

?>