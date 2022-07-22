<?php
include("config.php");
$HtmlCode = "";
$ToSearch = $_POST['data'];
$allSemester = array();
$n = 0;

$sql = "SELECT mysemester FROM semester";
 
 $callback = mysqli_query( $conn, $sql) or die(mysqli_error(die));
      if (mysqli_num_rows($callback) > 0)
	   {
		while ($receive = mysqli_fetch_array($callback))
                    {
                      
                    	$allSemester[$n] = $receive[0];
                        $n++;
                    }
           }
        //    $allgoods_string  = implode(',', $allSession);
          echo (json_encode($allSemester));
?>