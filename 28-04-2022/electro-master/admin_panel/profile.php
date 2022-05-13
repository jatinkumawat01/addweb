<?php
include('head.php');
//include('client_database.php');
?>

<body>
    <?php include("layout.php");?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Hello <?php echo $n; ?>! This is Your Profile Page </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="profile" style="margin-left: 563px;font-size: 25px;">
                    <?php 
                        
                            echo " <i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>Name: ".$n."<br>";
                            echo "Email :". $e."<br>";
                            echo "Password :".$p."<br>";
                            echo "Mobile :".$m."<br>";
                            echo "Address :".$a."<br><br>";
                            echo "Edit your profile </strong><a href='C_edit.php?email=".$e."' ><i class='bx bx-edit-alt me-1'></i>Edit</a>";
                        ?>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php');?>
</body>

</html>