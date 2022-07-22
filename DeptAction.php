 <?php
include('config.php');
if(isset($_POST['submit'])){
$dept = $_POST['dept'];
 
    //insert results from the form input
	$query = mysqli_query($conn,"INSERT INTO department(department
		) VALUES('" . $dept . "')");
   }
	if ($query) {
		echo '<script> alert("department Added successfully");</script>' ;
		echo"<script>window.location.href='Department.php'</script>";
	}else{
	echo  '<script> alert("upload error"); </script>';
	
}

?>