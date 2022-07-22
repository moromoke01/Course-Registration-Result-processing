<?php
include('config.php');
$HtmlCode="";
$searchMatric= $_POST['Matric'];
$searchSesson =$_POST['session'];
$searchSemester = $_POST['semester'];
$CoursesForMe= array();
$n=0;
// echo "hey";


$query= "SELECT course FROM studcoursereg where stud_id= '".$searchMatric."' AND session_year= '".$searchSesson."' AND semester='".$searchSemester."' " ;

$callMyCourses=mysqli_query($conn,$query) or die(mysqli_error());

   if (mysqli_num_rows($callMyCourses) > 0)
   {
       while($getmycourses= mysqli_fetch_array($callMyCourses))
       {
        $CoursesForMe[$n]=$getmycourses[0];
        $n++;
       }
   }
}
   echo (json_encode($CoursesForMe));
?>