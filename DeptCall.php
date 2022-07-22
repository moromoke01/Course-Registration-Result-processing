<?php
include ("config.php");
//$Searchdept = $_POST['Dept'];
$Dept= $_POST['Deptdata'];
$HtmlCode = "";
$alldept = array();
$n=0;

$sql = "SELECT dept_id, department FROM department ";
 
 $Deptfetch = mysqli_query($conn,$sql) or die(mysqli_error());
      if (mysqli_num_rows($Deptfetch) > 0)
	   {
		while ($DeptArray = mysqli_fetch_array($Deptfetch))
                    {
                      
                     
                    	$alldept[$n][0] = $DeptArray[0];
                      $alldept[$n][1]= $DeptArray[1];
                    	
                     $n++;
               }
           }
      
          echo (json_encode($alldept));
?>
