<?php
include_once 'database.php';
if(isset($_POST['save']))
{	
    
    $output_dir = "../img/cat_product";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );

	$Cat_id = $_POST['Cat_id'];
	$Product_title = $_POST['Product_title'];

	 $sql = "INSERT INTO cat_product (Cat_id,Product_title,Image)
	 VALUES ('$Cat_id','$Product_title','$NewImageName')";
	 if (mysqli_query($conn, $sql)) {
         
        echo "<script> location.href='../index.html'; </script>";
	 } else {
		echo "Error: "."Image and Category Already Added " . $sql . "
		
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>