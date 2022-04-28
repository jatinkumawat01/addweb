<?php
include('head.php');
$tname5=$_REQUEST['tname'];
?>
  <body>
    <?php include('layout.php');?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?php echo $tname5; ?></h4>

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
                      <form enctype="multipart/form-data" method ='post'>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-path">Image Path</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="file"
                                id="basic-default-brand"
                                name='file'
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
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-detail">Details</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <textarea rows="10" cols="30"
                                name='detail'
                                class="form-control">
                                </textarea>
                              
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
                              />
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" name='submit' class="btn btn-primary" value="Add">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
<!-- / Content -->

<?php include('footer.php');?>
  </body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['submit']))
{ 
    $id=$_POST['id'];

$filepath = "images/$tname5/" . $_FILES["file"]["name"];

$name=$_POST['name'];
$size=$_POST['size'];
$color=$_POST['color'];
$detail=$_POST['detail'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$path1="../electro-master/images/$tname5/". $_FILES["file"]["name"];


$sql = "INSERT into $tname5 (img_path,name,brand,size,color,detail,price ,isActive) VALUES ('$filepath','$name','$brand' ,'$size','$color','$detail',$price,1)";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
move_uploaded_file($_FILES["file"]["tmp_name"], $path1);
//copy($filepath, '../../electro-master/'.$filepath);
// chmod("images", 0777);
// chmod("images/$tname1", 0777);
// chomd("../../electro-master/images",0777);
// chomd("../../electro-master/images/$tname",0777);
// copy($filepath, $fpath1);
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
