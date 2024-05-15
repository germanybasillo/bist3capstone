<!DOCTYPE html>
<html>

<head>
      <title>Homies</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="login">
             <i class="fas fa-sign-out-alt"></i>
          </a>
       </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index" class="brand-link">
        <img src="logo.png" alt="Logo" width="300" style="margin-bottom:-100px;margin-top:-70px;margin-left:-30px"
          style="opacity: .8">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <li class="nav-item">
              <a href="index" class="nav-link">
                <i class="nav-icon fa fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="notice" class="nav-link">
                <i class="nav-icon fa fa-bell"></i>
                <p>
                  Notice
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="proof" class="nav-link">
                <i class="nav-icon fa fa-file-invoice"></i>
                <p>
                  Proof of Payment 
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payment-history" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>
                  Payment History 
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="suggestions" class="nav-link">
                <i class="nav-icon fa fa-envelope"></i>
                <p>
                  Suggestions
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Capstone</b> Group-ambot
      </div>
      <strong>@include('template.footer_acc')</footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>
