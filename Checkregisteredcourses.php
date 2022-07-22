<?php
include ("config.php");

$Matric = $_POST['Matric'];
$Session =$_POST['Sess'];
$Semester =$_POST['Sem'];
$all = array();
$n=0;


$sql = "SELECT course FROM studcourseReg where stud_id='".$Matric."'";
 
 $fetch = mysqli_query($conn,$sql) or die(mysqli_error());
      if (mysqli_num_rows($fetch) > 0)
	   {
		while ($EachStudentCourses = mysqli_fetch_array($fetch))
                    {
                      
                   $all[$n]=$EachStudentCourses[0]; 
                   $n++;
               }
           }
       
          echo (json_encode($all));
?>
