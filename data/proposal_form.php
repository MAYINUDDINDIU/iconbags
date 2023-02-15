<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $student_name = $_POST['student_name'];
	 $father_name = $_POST['father_name'];
	 $mother_name = $_POST['mother_name'];
	 $gender = $_POST['gender'];
	 $mobile= $_POST['mobile'];
	 $reg_no= $_POST['reg_no'];
	 $roll_no= $_POST['roll_no'];
	 $batch_no= $_POST['batch_no'];
	 $session_id= $_POST['session_id'];
	 $type_namee= $_POST['type_namee'];
	 $s_name= $_POST['s_name'];
	 $choice_list= $_POST['choice_list'];
	 $skills= $_POST['skills'];
	


	 $sql = "INSERT INTO proposal_form_data (student_name,father_name,mother_name,roll_no,gender,mobile,reg_no,batch_no,session_id,
	 type_namee,s_name,choice_list,skills)
	 VALUES ('$student_name','$father_name','$mother_name','$roll_no','$gender','$mobile','$reg_no',
	 '$batch_no','$session_id','$type_namee','$s_name','$choice_list','$skills')";

	 if (mysqli_query($con, $sql)) {
		echo '<script type ="text/JavaScript">';  
		echo 'alert("Succesfully Saved Data")';  
		echo '</script>'; 
		echo "<script> location.href='../index.html'; </script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}

?>