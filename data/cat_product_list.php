<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "database.php";
$sql="select * from cat_product";
$result=mysqli_query($conn,$sql)or die ("sql query failed");

 if(mysqli_num_rows($result)>0){

    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
 }else{

    echo json_encode(array('Message'=>'no record found','status'=>false));
 }

?>