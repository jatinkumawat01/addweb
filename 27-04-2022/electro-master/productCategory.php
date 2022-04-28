<div>
                                <!-- product -->
                                <?php 
										try {
                                            include("db.php");
											//$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
										
										$sql="select * from category";
										$q = $pdo->query($sql);
										$q->setFetchMode(PDO::FETCH_ASSOC);

										
										while($row=$q->fetch())
											{
												$tid=$row['C_id'];
												$c_name=$row['category_name']; 
												$tname2=$row['category_tname'];

												$SQL1="select * from $tname2 where isActive=1 and ImgId=1";
												$q1 = $pdo->query($SQL1);
												$q1->setFetchMode(PDO::FETCH_ASSOC);
												while($row1=$q1->fetch())
												{
													$path1=$row1['img_path'];
													$n=$row1["name"];
													$b=$row1["brand"];
									
										?>

                                <div class="col-md-3 col-xs-8">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="productView.php?tname=<?php echo $tname2;?>"><img
                                                    src="admin_panel/<?php echo $path1;?>" height=250 width=270
                                                    style='padding: 20px 20px 20px 20px; ' alt=""></a>
                                            <div class="product-label">
                                                <span class="sale">-10%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $c_name;?></p>
                                            <h3 class="product-name" style="white-space: nowrap; width: 220px; overflow: hidden; text-overflow:ellipsis; padding-left:22px;"><a href="#"><?php echo $n;?></a></h3>

                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <?php }
										}
												} 
												catch (PDOException $e) {
													die("Could not connect to the database $dbname :" . $e->getMessage());
												} ?>
                                <!-- /product -->




                            </div>