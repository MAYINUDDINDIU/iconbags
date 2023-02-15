<?php 

include './data/database.php';

$deleteId = $_GET['id'];

$deleteProduct = "DELETE FROM cat_product WHERE Cat_id = '{$deleteId}'";

$deleted = mysqli_query($conn,$deleteProduct);

if($deleted){
	header("location: cat_product.php");
}else{
	echo "Can't Delete User.";
}

mysqli_close($conn);

?>