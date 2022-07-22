<?php
include("config.php");
$HtmlCode = "";
$ToSearch = $_POST['Matric'];
$allDetils = array();
$n = 0;

$sql = "SELECT stud_id,fullname,student_level,department FROM student_table WHERE matricNo = '".$ToSearch."'";
 
 $result = mysqli_query($conn,$sql) or die(mysqli_error());
      if (mysqli_num_rows($result) > 0)
	   {
		while ($newArray = mysqli_fetch_array($result))
                    {
                    	$allDetils[0] = $newArray[0];
                    	$allDetils[1] = $newArray[1];
                    	$allDetils[2] = $newArray[2];
                     $allDetils[3] = $newArray[3];
                     }

                    echo (json_encode($allDetils));
           }
           else{
              echo "No record";
           }
      
          
          ?>