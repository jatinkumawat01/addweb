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
  
               $sql="select * from Customer ";
   $q = $pdo->query($sql);
   $q->setFetchMode(PDO::FETCH_ASSOC);

   while($row=$q->fetch())
                {
                  
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

                    </td>
                  </tr>
                </tbody>
              </table>
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