<?php


ob_start();
error_reporting(0);
session_start();  

$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname where ImgId=$Id") or die("Error in query");
while($row=mysqli_fetch_array($query))
        { 
            $id=$row['ImgId'];
            $filepath=$row["img_path"];
            $brand =$row["brand"];
            $size=$row["size"];
            $color=$row["color"];
            $name=$row["name"];
            $detail=$row["detail"];
            $price=$row["price"];
        } 
include('head.php');
?>
  <body>
    <?php include('layout.php');?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?php echo $tname; ?></h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Product Add form</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method ='post'>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name"><?php echo $tname; ?> Product Id</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name='id' value='<?php echo $id; ?>'  />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-path">Image Path</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="file"
                                id="basic-default-brand"
                                name='file'
                                value='<?php echo $filepath; ?>'
                                class="form-control"
                                
                              />
                             
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-brand">Brand</label>
                          <div class="col-sm-10">
                            <input
                            type="text"
                            id="brand"
                            
                            class="form-control"
                            name="brand"
                            value='<?php echo $brand; ?>'
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-color">Product Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-color"
                                name='name'
                                class="form-control"
                                value='<?php echo $name; ?>'
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                       
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Size</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="basic-default-size"
                              class="form-control size"
                              name='size'
                              value=<?php echo $size; ?>
                              
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-color">Color</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-color"
                                name='color'
                                class="form-control"
                                value='<?php echo $color; ?>'
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-detail">Details</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-detail"
                                name='detail'
                                class="form-control"
                                value='<?php echo $detail; ?>'
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-price">Price</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="float"
                                id="basic-default-price"
                                name='price'
                                class="form-control"
                                value=<?php echo $price; ?>
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" name='submit' class="btn btn-primary" value="Edit">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
<!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['submit']))
{ 
    $id=$_POST['id'];

$filepath = "images/$tname/" . $_FILES["file"]["name"];
$id=$_POST['id'];
$name=$_POST['name'];
$size=$_POST['size'];
$color=$_POST['color'];
$detail=$_POST['detail'];
$brand=$_POST['brand'];
$price=$_POST['price'];


$sql="update $tname set ImgId=$id,img_path ='$filepath', detail='$detail', price=$price ,color='$ccolor', brand='$brand' , size='$size' , name='$name' where ImgId=$Id";
//$sql = "INSERT into $tname (ImgId,img_path,name,brand,size,color,detail,price) VALUES ($id,'$filepath','$name','$brand' ,'$size','$color','$detail',$price)";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);

$query =mysqli_query($con, $sql);
echo $sql;
if($query) 
{

header('Location:productTable.php');
} 
else 
{
echo "Error !!";
}
}
?>
