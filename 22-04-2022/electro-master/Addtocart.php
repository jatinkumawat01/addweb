

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
							$totalp=0;
							$totalQ=0;
						   $q->setFetchMode(PDO::FETCH_ASSOC);

						   while($row=$q->fetch())
                            {
								$id=$row["ProductId"];
								$ProductName=$row["ProductName"];
								$ProductBrand=$row["ProductBrand"];
								$size=$row["size"];
								$color=$row["color"];
								$Quantity=$row["Quantity"];
								$price=$row['ProductPrice'];
								$filepath=$row['img_path'];
								$AddToCartId=$row['AddToCartId'];

								$totalQ +=$Quantity;
								$totalp +=($price*$Quantity);
								
                            ?>
							
								<tr><td style='padding: 10px 10px 10px 10px; '>
							
                                <a  href='view.php?id=<?php echo $id; ?>&tname=<?php echo $ProductName; ?>' ><img src=admin_panel/<?php echo $filepath;?> height=100 width=100 /></a>
                </td>
				<td style='padding: 20px 20px 20px 20px; '>
                

                            
							 	<b>Name:</b><a  href='view.php?id=<?php echo $id; ?>&tname=<?php echo $ProductName; ?>'> <?php echo $ProductBrand." ".$ProductName; ?><br></a>
                               
                                <b>Size:</b> <?php echo $size ; ?><br>
                                <b>Color:</b> <?php echo $color; ?><br>
								<b>Quantity:</b> <?php echo $Quantity; ?><br>
								<b>Price:</b> <?php echo $price; ?><br>
                                
                        
								
                            
							</td>
					<td style='padding: 50px 20px 20px 20px; '>
					
				
					<a  href='DeleteATC.php?id=<?php echo $AddToCartId; ?>&Pname=<?php echo $ProductName;?>' ><i class='bx bx-trash me-1'></i> Delete</a>
                </td></tr>
				
				<?php
                            }
						} 
						catch (PDOException $e) {
							die("Could not connect to the database $dbname :" . $e->getMessage());
						}
                           
                            ?>
                	
					</tbody></table>

					<table class="table table-striped" border="2px" >
			<center><h1>Order by</h1> </center>
							<tbody>
<tr>
	<td>
		Total Items
	</td>
	<td>
		Total Price
	</td>
	
</tr>
<tr>
	<td><h5><?php echo $totalQ;?></h5> </td>
	<td><h5>₹<?php echo $totalp; ?></h5></td>
</tr>
<tr>
<th colspan="2" ><a href="address.php?tname=Customer">
<center>	
BUY NOW
</center></a></th>
</tr>
							</tbody>
						</table>
					</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        



	</body>
</html>
