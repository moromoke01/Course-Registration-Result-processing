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
    <script src=js/jquery-3.1.0.js type="text/javascript"></script>
    <script src=js/StudCoursejs.js type="text/javascript"></script>
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <script src=https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js></script>
    <script src=https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jsZip/3.1.3/jsZip.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js></script>
    <script src=https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"></script>
    <!-- <script src = https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js ></script> -->
    <script type="text/javascript" src="js/bootstrap.js"></script> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background:#C1C1FF;">
    <?php
    require "./CourseHeader.php";
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row mb-2" style="margin-top:30px; " id="studentinfo">
                <!-- left column -->
                <div class="col-sm-6 offset-4" >
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Student Course Registration</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="courseform" method="POST" >
                            <div class="card-body">
                                <div class="form-group">
                                    
                                    Student Matric No:

                                   <input type="text"  id="Matric" 
                                    name="stud_id" placeholder="Matric No"/>
                                </div>
                                <div class="form-group">
                                    Select Session:
                                    <select id="sessionselect">

                                    </select>
                                </div>
                                <div class="form-group">
                                    Select Semester:
                                    
                                    <select id="semselect">

                                    </select>
                                </div>
                                <button class="button btn btn-success" type="submit" id="search">Submit</button> 

                            </div>
                            <!-- /.card-body -->
                        </form>
                            

                    </div>
                </div>
            </div>

<!--table that display list of courses to be added for each student after form-info above has been filled and submitted-->
            <div class="row mb-2" id="coursetable">
                <div class="col-md-10 offset-2">                    
                        <h1>STUDENTS' COURSE REGISTRATION</h1>
                 
                <form action="">
                    <div class="row">
                        <div class="col-md-5 input-group">
                            <span class="input-group-append">
                            <button class="btn btn-success">Student Name</button>
                            </span>
                            <input type="text" class="form-control" id="nam">
                        </div>

                        <div class="col-md-5 offset-2 input-group">
                        <span class="input-group-append">
                            <button class="btn btn-success">Matric Number</button>
                            </span>
                            <input type="text" class="form-control" id="matric">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5 input-group">
                          <span class="input-group-append">
                             <input type="text" class="btn btn-success" id="level">
                            </span>
                            <input type="text" class="form-control" id="dept">
     
                        </div>
                          
                        <div class="col-md-5 offset-2 input-group">
                          <span class="input-group-append">
                            <button class="btn btn-success"><span id="sss"></span></button>
                            </span>
                            <input type="text" class="form-control" id="smter">
                        </div>
                    </div>
                 </form>
                 <br>

                        <!-- <p>Course Table for <span id="stnm"></span></p>
                        <p>Matric Number <span id = "mtnb"></span></p>
                        <p>Session <span id="sss"></span></p>
                        <p>Semeseter <span id="semeser"></span></p> -->
                <div class="row table-responsive">  
                  <div class="col-md-10"> 
                        <table class='table table-bordered table-hover' id='dataTab'>
                            <thead style='background-color:#330000; color:white;'>
                                <tr>
                                    <th>S/N</th>
                                    <th>Course Title</th>
                                    <th>Course Code</th>
                                     <th>Course Unit</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody id = "mybody">
                                <!-- <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <a href="" title="Add Course" class="text-primary">
                                            <i class="fa fa-plus"></i></a>
                                        </a>

                                        <input type="submit" name="submit" class="btn btn-primary" value="Add">

                                    </td>
                                    <td><i>Unregistered</i></td>
                                </tr> -->
                            </tbody>
                        </table>
                     </div>

                    <div class="col-md-2">
                        <table >
                         <tr><th>Picked Courses</th></tr>   
                        </table>                  
                      </div> 

                      </div> 
                        <button class="btn btn-success" id = "sveBtn">Save added Courses</button>
                    
                    
                      
                    
                </div>
               
            </div>
            
        </div>
    </section>

</body>

</html>