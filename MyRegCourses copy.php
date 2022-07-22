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
    <script src=js/jquery-3.1.0.js type="text/javascript"></script>
    <script src=js/MyCourses.js type="text/javascript"></script>
  
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background:#FFFF99;">
    <?php
    require "./CourseHeader.php";
    ?>
    <!-- Main content -->
    <section class="content" >
        <div class="container">
            <div class="row mb-2" style="margin-top:30px;" id="AccessCoursesForm">
                <!-- left column -->
                <div class="col-sm-6 offset-4">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">View my Registered Courses</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="" id="myCoursepage">
                            <div class="card-body">
                            <div class="form-group">
                                     Student Matric No:
                                    <input type="text"  id="Matric" placeholder="Matric No">
                                </div>
                                
                                <div class="form-group">
                                   Select Session: 
                                    <select  id="Session"></select>
                                </div>
                                <div class="form-group">
                                Select Semester:
                                    <select id="Semester"></select>
                                </div>
                            </div>
                             <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                        </form>
                
                </div>
            </div>
     
                        <!-- Table showing list of Student registered courses-->
                 
            <div class="row mb-2" id="courseItemize">

                
                <div class="col-md-10 offset-2">
                    <div class='table-responsive'>
                    <h2>COURSE FORM</h2>
                      
                        <table class='table  table-hover' id='dataTab'>
                            <thead style='background-color:#330000; color:white;'>
                                <tr>
                                <th>Course Code</th>
                                    <th>Course Title</th>
                                     <th>Course Unit</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody id = "Coursetable">
                              
                                    
                              
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

            </div>
    </section>

                            <!-- /.card-body -->

                           

</body>

</html>