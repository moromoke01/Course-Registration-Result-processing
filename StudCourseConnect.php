<?php
include('config.php');

  $stud_id=$_POST['stud_id'];
  $course_id=$_POST['course_id'];
	$session_id=$_POST['session_id'];
	$semester_id=$_POST['semester_id'];
	

  	$coursequery= mysqli_query($conn, "INSERT INTO studcoursereg(stud_id,course_id,session_year_id,semester_id) VALUES ('".$stud_id."','".$course_id."','".$session_id."', '".$semester_id."')");
   	
       if ($coursequery)
       {
         echo("Course Added for Student");
        
       }
       
       else
       {
         echo ("Failed to Add Course");
       }


?>