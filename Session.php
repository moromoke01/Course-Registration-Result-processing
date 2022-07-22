<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Course</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background:#FFFF99;">
    <?php
    require "./header.php";
    ?>
    <!-- Main content -->
    <section class="content" >
        <div class="container">
            <div class="row mb-2" style="margin-top:30px;">
                <!-- left column -->
                <div class="col-sm-6 offset-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> New Session</h3>
                        </div>
                        <!-- /.card-header -->
                        <?php
include('config.php');
if(isset($_POST['submit'])){


$session = $_POST['session'];

  
    //insert results from the form input
	$query = mysqli_query($conn,"INSERT INTO session_year(mysession) VALUES('" . $session . "')");
   }
	if ($query) {
		echo '<script> alert("Session Added successfully");</script>' ;
		// echo"<script>window.location.href='offenceform.php'</script>";
	}else{
	echo  '<script> alert("Session upload error"); </script>';
	
}

?>


                        <!-- form start -->
                        <form role="form" action="?" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                   Add new Session
                                    <input type="text" class="form-control" name="session" placeholder="Enter new Session">
                                </div>
                                


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>