

<?php include("head.php"); ?>
	<body>
		<?php include('header.php'); ?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
			<div class="row">
			<table class="table table-striped"  >
			<center><h1>Add To Cart</h1> </center>
							<tbody>
				
                            <?php 

						try {
							
							$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
                           $sql="select * from AddToCart ";
						   $q = $pdo->query($sql);
					
						   $q->setFetchMode(PDO::FETCH_ASSOC);

						   while($row=$q->fetch())
                            {

								
                            ?>
							
								<tr><td style='padding: 10px 10px 10px 10px; '>
							
                                <a  href='view.php?id=<?php echo $row["ProductId"]; ?>&tname=<?php echo $row["ProductName"] ?>' ><img src=<?php echo $row['img_path'];?> height=100 width=100 /></a>
                </td>
				<td style='padding: 20px 20px 20px 20px; '>
                

                            
							 	<b>Name:</b><a  href='view.php?id=<?php echo $row["ProductId"]; ?>&tname=<?php echo $row["ProductName"] ?>'> <?php echo $row["ProductBrand"]." ".$row["ProductName"]; ?><br></a>
                               
                                <b>Size:</b> <?php echo $row["size"]; ?><br>
                                <b>Color:</b> <?php echo $row["color"]; ?><br>
								<b>Quantity:</b> <?php echo $row["Quantity"]; ?><br>
                                
                        
								
                            
							</td>
					<td style='padding: 50px 20px 20px 20px; '>
					
				
					<a  href='delete.php?id=<?php echo $row["ProductId"]; ?>&tname=<?php echo $row["ProductName"] ?>' ><i class='bx bx-trash me-1'></i> Delete</a>
                </td></tr>
				
				<?php
                            }
						} 
						catch (PDOException $e) {
							die("Could not connect to the database $dbname :" . $e->getMessage());
						}
                           
                            ?>
                	
					</table></table>
					</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        



	</body>
</html>
