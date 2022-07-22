<?php
include('config.php');
$HtmlCode="";
$Dept= $_POST['Deptdata'];
$ListDept= array();
$n=0;

$deptback = "SELECT * FROM department";

$datareceive = mysqli_query($conn,$sql) or die (mysqli_error());
if(mysqli_num_rows($datareceive) > 0)
{
while ($deptarray = mysqli_fetch_array($datareceive)){
    $ListDept = $deptarray[0];
}
    echo (json_encode($ListDept));
}
else{
    echo "No Department Record";
}
?>