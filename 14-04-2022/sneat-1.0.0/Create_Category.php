<?php
include('head.php');
?>
  <body>
    <?php include('layout.php');?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Add Category</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Category Add form</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method ='post'>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name"> Category Table id</label>
                          <div class="col-sm-10">
                            <input type="int" class="form-control" id="basic-default-name" name='id'  />
                          </div>
                        </div>
                       
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-brand">Category Title</label>
                          <div class="col-sm-10">
                            <input
                            type="text"
                            id="title"
                            
                            class="form-control"
                            name="title"
                            
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-color">Category Table Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-color"
                                name='tname'
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
if(isset($_POST['submit'])){
$tid=$_POST('id');
$c_name=$_POST('title');
$tname1=$_POST('tname');
echo $c_id .$c_name.$tname1;


 
    $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
    $sql="INSERT INTO category (C_id, category_name, category_tname) VALUES ($c_id, '$c_name', '$tname1')";
    $query=mysqli_query($con,$sql) or die("Error in insert query");
    
if($query) 
{
    $sql1="CREATE TABLE $tname (ImgId int(11) NOT NULL PRIMARY KEY,img_path varchar(200) NOT NULL,`name` text NOT NULL,brand text NOT NULL,size text NOT NULL, color text NOT NULL, detail text NOT NULL, price double(12,2) NOT NULL, isActive int(11) NOT NULL) ";
    $query1=mysqli_query($con,$sql1) or die("Error in create query");
    if($query1){

        header('Location:productTable.php');
    }
    else 
    {
    echo $sql1;
    echo "Create Category query Error !!";
    }
} 
else 
{
echo $sql;
echo "insert table query Error !!";
}
}


?>