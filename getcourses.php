<?php
include ("config.php");

$HtmlCode = "";
//$ToSearch = $_POST['SID'];
$allCourses = array();
$n=0;

$sql = "SELECT course_id, course_title, course_code, course_unit FROM course ";
 
 $coursefetch = mysqli_query($conn,$sql) or die(mysqli_error());
      if (mysqli_num_rows($coursefetch) > 0)
	   {
		while ($courseArray = mysqli_fetch_array($coursefetch))
                    {
                      
                      //echo $courseArray;
                    	$allCourses[$n][0] = $courseArray[0];
                    	$allCourses[$n][1] = $courseArray[1];
                    	$allCourses[$n][2] = $courseArray[2];
                      $allCourses[$n][3] = $courseArray[3];
                     $n++;
               }
           }
        //    $allgoods_string  = implode(',', $allSession);
          echo (json_encode($allCourses));
?>
