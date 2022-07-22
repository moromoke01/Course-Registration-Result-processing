<?php
include("config.php");
$HtmlCode = "";
$ToSearch = $_POST['SID'];
$allSession = array();
$n = 0;

$sql = "SELECT mysession FROM session_year";
 
 $result = mysqli_query($conn, $sql) or die(mysqli_error());
      if (mysqli_num_rows($result) > 0)
	   {
		while ($newArray = mysqli_fetch_array($result))
                    {
                      
                    	$allSession[$n] = $newArray[0];
                        $n++;
                    }
           }
        //    $allgoods_string  = implode(',', $allSession);
          echo (json_encode($allSession));
?>