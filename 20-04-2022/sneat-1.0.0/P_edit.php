<?php


ob_start();
error_reporting(0);
session_start();  

$tname6=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname6 where ImgId=$Id") or die("Error in query");
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?php echo $tname6; ?></h4>

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name"><?php echo $tname6; ?> Product Id</label>
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
                            <textarea rows="10" cols="30"
                                
                                name='detail'
                                class="form-control">
                                <?php echo $detail; ?>
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

<?php include('footer.php');?>
  </body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['submit']))
{ 
  $filenew = $_FILES["file"]["name"];
  
    $id=$_POST['id'];
if($filenew=='')
{
$file=$filepath;
}
else{
$file="images/$tname6/" .$filenew;
$path1="../../electro-master/images/$tname6/". $_FILES["file"]["name"];

}
//echo $filepath;
$id=$_POST['id'];
$name=$_POST['name'];
$size=$_POST['size'];
$color=$_POST['color'];
$detail=$_POST['detail'];
$brand=$_POST['brand'];
$price=$_POST['price'];


$sql="update $tname6 set ImgId=$id,img_path ='$file', detail='$detail', price=$price ,color='$color', brand='$brand' , size='$size' , name='$name' where ImgId=$Id";
//$sql = "INSERT into $tname6 (ImgId,img_path,name,brand,size,color,detail,price) VALUES ($id,'$filepath','$name','$brand' ,'$size','$color','$detail',$price)";
move_uploaded_file($_FILES["file"]["tmp_name"], $file);
move_uploaded_file($_FILES["file"]["tmp_name"], $path1);
$query =mysqli_query($con, $sql);
echo $sql;
if($query) 
{

header("Location:Pview.php?tname=$tname6");
} 
else 
{
echo "Error !!";
}
}
?>
