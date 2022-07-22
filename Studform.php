<?php
include('config.php');
if(isset($_POST['submit'])){


$matric = $_POST['matric'];
$fullname = $_POST['fullname'];
$department = $_POST['dept'];
$student_level = $_POST['student_level'];


  
    //insert results from the form input
	$query = mysqli_query($conn,"INSERT INTO student_table(fullname,matricNo,department,student_level
		) VALUES('" . $fullname . "', '" . $matric . "','" . $department . "','" . $student_level . "')");
   }
	if ($query) {
		echo '<script> alert("successfully saved ");</script>' ;
		
	}else{
	echo  '<script> alert("upload error");</script>';
	
}


