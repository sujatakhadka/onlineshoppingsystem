<?php
include '../db.php';

$data = mysqli_query($con,"DELETE FROM products where product_id=".$_GET['product_id']);
if($data)
	echo "data deleted";
mysqli_close($con);
?>





