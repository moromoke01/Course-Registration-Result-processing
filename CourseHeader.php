<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light" style="background:#020322; color:#ffffff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:white;">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Course.php" class="nav-link" style="color:white;">New course</a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="CourseRecord.php" class="nav-link" style="color:white;">Course Record</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="StudCourseReg.php" class="nav-link" style="color:white;">Student Course Reg</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="MyRegCourses.php" class="nav-link" style="color:white;">My Registered Courses</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#020322;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link " style="background:#C1C1FF; color:black;" id="dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./student.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Department.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Course.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Course</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="./StudCourseReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Course Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Session.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Session</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semester</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>