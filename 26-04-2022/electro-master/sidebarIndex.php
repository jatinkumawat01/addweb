<?php 
try {
    include('db.php') ;
    $sql="select * from category";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC); ?>
    <form method="post" style="padding-left:40px">
    <h3>Categories</h3>
    <?php


while($row3=$q->fetch())
{

$c_name3=$row3['category_name']; 
$tname3=$row3['category_tname'];
?>
    <input type="radio" name="Categories" value=<?php echo $tname3;?>>
    <label for="<?php echo $tname3;?>"> <?php echo $c_name3;?></label><br>
    

    <?php }
}

catch (PDOException $e) {
die("Could not connect to the database $dbname :" . $e->getMessage());
} ?>

    <h3>Price</h3>
    <input type="radio" id="0-500" name="price_range" value=500>
    <label for="0-500"> 0-500</label><br>
    <input type="radio" id="500-1000" name="price_range" value=1000>
    <label for="500-1000"> 500-1000</label><br>
    <input type="radio" id="1000-5000" name="price_range" value=5000>
    <label for="1000-5000"> 1000-5000</label><br><br>
    <input type="radio" id="5000-15000" name="price_range" value=15000>
    <label for="5000-15000"> 5000-15000</label><br><br>
    <input type="radio" id="15000-50000" name="price_range" value=50000>
    <label for="15000-50000"> 15000-50000</label><br><br>
    <input type="radio" id="50000<" name="price_range" value="above">
    <label for="50000<"> above 50k</label><br><br>


    <input type="submit" name="submit" value="Apply">

</form>
