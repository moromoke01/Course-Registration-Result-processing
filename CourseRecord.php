<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage Courses</title>
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
    <script src=https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js></script>
    <script src=https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jsZip/3.1.3/jsZip.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js></script>
    <!-- <script src = https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js ></script> -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background:#FFFF99;">
    <?php
    require "./CourseHeader.php";
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
            <div class="col-md-10 offset-2">
                <div class="card" style="margin-top:20px;">
                    <div class='table-responsive'>
                        <table class='table  table-hover' id='dataTab'>
                            <thead style="background:#FFFF99; color:black;">
                                <tr>
                                    <th>S/N</th>
                                    <th>course_id</th>
                                    <th>Course Title</th>
                                    <th>Course code</th>
                                    <th>Course Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                                
               <?php

include("config.php");


$courseRecord = mysqli_query($conn, "SELECT * FROM course");
//$result = mysql_query($sql, $conn) or die(mysql_error());

if (mysqli_num_rows( $courseRecord) > 0) {
    ?>

                            
                          <tbody> 
                                <?php while ($record = mysqli_fetch_array($courseRecord)) { ?>
                              <tr>
                                    <td> </td>
                                    <td><?php echo $record[0]; ?> </td>
                                    <td><?php echo $record[1]; ?> </td>
                                    <td><?php echo $record[2]; ?></td>
                                    <td><?php echo $record[3]; ?></td>
                                    <td>

                                        <a href="./EditData.php?id=<?php echo $newArray['id']; ?>" title="Edit Data" class="text-info">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="./deleteData.php?del=<?php echo $newArray['id']; ?>" title="Delete Data" class="text-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                 }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <?php
     }
     mysqli_close($conn);
     ?>
    </section>
</body>

</html>