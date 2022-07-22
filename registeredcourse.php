<?php
include("config.php");
$HtmlCode = "";
$Matric = $_POST['Mt'];
$Sess = $_POST['Sess'];
$Sem = $_POST['Sem'];
$allcourses = $_POST['rcourses'];
$n = 0;


for ($i = 0; $i < count($allcourses); $i++)
{
$sql = "INSERT into studcoursereg (stud_id,course,session_year, semester ) values ('".$Matric."','".$allcourses[$i]."','".$Sess."','".$Sem."')";
 
 $result = mysqli_query($conn,$sql) or die(mysqli_error());
     if ($result){
         echo "Student's Course updated ";
     }
    }
          ?>