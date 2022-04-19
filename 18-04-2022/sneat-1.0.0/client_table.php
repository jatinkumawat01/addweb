<?php
include('client_database.php');
include('head.php');
?>  
<body>
<?php include("layout.php");?>

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id='table'>
                        <!-- <?php 
                        // include('clientActiveView.php');
                        // include("AllClientView.php");
                        ?> -->
                        <script>
                          $.ajax({
                            url: "clientActiveView.php",
                            type: "POST",
                            cache: false,
                            success: function(data){
                              
                              $('#table').html(data); 
                            }
                          });
                            </script>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
    
              <?php include('footer.php');?>
  </body>
</html>