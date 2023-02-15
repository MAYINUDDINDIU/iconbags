<?php

$conn=mysqli_connect("localhost","root","","versity_project");

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM type";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['cid']}'>{$row['type_name']}</option>";
		}
	}else if($_POST['type'] == "supervisor_name"){

		$sql = "SELECT * FROM supervisor_name WHERE cid = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
		}
	}

	echo $str;
 ?>
