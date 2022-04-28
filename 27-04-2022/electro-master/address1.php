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
  require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';

$err = array();

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();  // the mailer is set to use SMTP
$mail->SMTPDebug = 1; // 1 - errors & messages; 2 - messages only
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true; // SMTP authentication is turned on
$mail->Username = "jatinkumawat0113@gmail.com";  // SMTP username
$mail->Password = "Jatin@9799"; // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = "jatinkumawat0112@gmail.com";
$mail->FromName = "Jatin Kumawat";	 // name is optional
$mail->AddAddress("$email");
$mail->AddReplyTo("$email", "Hello");

$mail->WordWrap = 50;  // set word wrap to 50 characters
$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Thank You from Annapurna!";
$mail->Body    = "Hello $name, <br/><br/> Thank you for your order. We’ll send a confirmation when your order ships. Your estimated delivery date is indicated below. If you would like to view the status of your order or make any changes to it </br/>Thank you,<br/>Annapurana Store";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send()) {
   $err['mail'] = $mail->ErrorInfo;
}
  header("Location:welcome.php");
}

?>