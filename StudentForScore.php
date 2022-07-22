<?php
include("config.php");
$HtmlCode = "";
$CourseCode = $_POST['CourseCode'];
$semester = $_POST['semester'];
$session = $_POST['session'];
$ListOfMatric = array();
$n = 0;

$sql = "SELECT stud_id FROM studcoursereg WHERE course = '".$CourseCode."'AND semester ='".$semester."' AND session_year ='".$session."'";
 
 $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      if (mysqli_num_rows($result) > 0)
	   {
		while ($newArray = mysqli_fetch_array($result))
                    {
                    	$ListOfMatric[$n][0] = $newArray[0];
              
                     }

                    echo (json_encode($ListOfMatric));
           }
           else{
              echo "No record";
           }
      
?>