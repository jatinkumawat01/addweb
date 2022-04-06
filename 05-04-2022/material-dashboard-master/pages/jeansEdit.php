<?php
include('headclear.php');
$Id=$_REQUEST['Id'];
$con=mysqli_connect("localhost","root","","batch6");
$sql = "Select * from jeans";

$query =mysqli_query($con, $sql);
while($row=mysqli_fetch_array($query))
    {
        $details=$row['details'];
        $prize=$row['prize'];
        $path=$row['img_path'];
    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="">
  <?php  include('header.php'); ?>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container"><?php
include('headclear.php');
$Id=$_REQUEST['Id'];
$con=mysqli_connect("localhost","root","","batch6");
$sql = "Select * from jeans";

$query =mysqli_query($con, $sql);
while($row=mysqli_fetch_array($query))
    {
        $details=$row['details'];
        $prize=$row['prize'];
        $path=$row['img_path'];
        $title=$row['title'];
        $Highlights=$row['Highlights'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="">
  <?php  include('header.php'); ?>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Edit page</h4>
            
                </div>
                <div class="card-body">
                  <form name="myform" enctype="multipart/form-data" mathod='post'>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product Id</label>
                      <input type="int" class="form-control" name='id'value='<?php echo $Id; ?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product image file</label>
                      <input type="file" class="form-control" name='file' value=<?php echo '' ?>>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product Title</label>
                      <input type="text" class="form-control" name='title' value=' <?php echo $title;?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product Highlights</label>
                      <input type="text" class="form-control" name='Highlights' value=' <?php echo $Highlights;?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product details</label>
                      <input type="text" class="form-control" name='details' value=' <?php echo $details;?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Prize</label>
                      <input type="float" class="form-control" name='prize' value=' <?php echo $prize;?>'>
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name='Submit1' value='Submit1'  formmethod="post">Upload File</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
<?php 
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];

$filepath = "images/jeans/" . $_FILES["file"]["name"];
$details=$_POST['details'];
$prize=$_POST['prize'];
$title=$_POST['title'];
$highlights=$_POST['Highlights'];


$sql = "update jeans set ImgId=$id,img_path ='$filepath', details='$details',prize=$prize title='$title, Highlights='$highlights' where ImgId=$Id";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
header('Location:tables.php');
} 
else 
{
echo "Error !!";
}
}
?>

          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Edit page</h4>
            
                </div>
                <div class="card-body">
                  <form name="myform" mathod='post'>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product Id</label>
                      <input type="int" class="form-control" name='id'value='<?php echo $Id; ?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product image file</label>
                      <input type="text" class="form-control" name='file' value=<?php echo '' ?>>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Product details</label>
                      <input type="text" class="form-control" name='details' value=' <?php echo $details;?>' >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Prize</label>
                      <input type="float" class="form-control" name='prize' value=' <?php echo $prize;?>'>
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name='Submit1' value='Submit1'  formmethod="post">Upload File</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
<?php 
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];

$filepath = "images/jeans/" . $_FILES["file"]["name"];
$details=$_POST['details'];
$prize=$_POST['prize'];


$sql = "update jeans set ImgId=$id,img_path ='$filepath', details='$details',prize=$prize where ImgId=$Id";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
header('Location:tables.php');
} 
else 
{
echo "Error !!";
}
}
?>
