<?php
include_once 'database.php';
// fetch image from database
$sql = 'select * from cat_product'; // change this id as per your need
$result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($con));
$row = mysqli_fetch_array($result);
?>
<html>
<head>
    <title>Retrieve Image from MySQL Database in PHP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
    <div class="container text-center">
         <img style='width:200px; height:200px' src="../img/cat_product/<?php echo $row['Image']; ?>" alt="">
        <?php echo $row['Image']; ?>
      </div>
</body>
</html>