<?php
include('config.php');
$HtmlCode="";
$searchMatric= $_POST['Matric'];
$searchSesson =$_POST['session'];
$searchSemester = $_POST['semester'];
$CoursesForMe= array();
$n=0;
// echo "hey";




$query= "SELECT B.course_title,B.course_code,B.course_unit ,C.course from course B,studcoursereg C where B.course_id=C.course AND C.stud_id= '".$searchMatric."' AND session_year= '".$searchSesson."' AND semester='".$searchSemester."'" ;

$callMyCourses=mysqli_query($conn,$query) or die(mysqli_error());

   if (mysqli_num_rows($callMyCourses) > 0)
   {
       while($getmycourses= mysqli_fetch_array($callMyCourses))
       {
        $CoursesForMe[$n][0]=$getmycourses[0];
        $CoursesForMe[$n][1]=$getmycourses[1];
         $CoursesForMe[$n][2]=$getmycourses[2];
        // $CoursesForMe[$n][3]=$getmycourses[3];
        
        $n++;
       }
   }

   echo (json_encode($CoursesForMe));
?>