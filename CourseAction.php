<?php
include('config.php');
if(isset($_POST['submit'])){


$CourseT = $_POST['CourseT'];
$CourseC = $_POST['CourseC'];
$CourseU = $_POST['CourseU'];

  
    //insert results from the form input
	$query = mysqli_query($conn,"INSERT INTO course(course_title,course_code,course_unit
		) VALUES('" . $CourseT . "', '" . $CourseC . "','" . $CourseU ."')");
   }
	if ($query) {
		echo '<script> alert("Course Added successfully");</script>' ;
		
	}else{
	echo  '<script> alert("upload error");
    window.location.href="course.php"; </script>';
	
}

?>
