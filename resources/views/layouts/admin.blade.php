<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin @yield('title') </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href=" {{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
    {{-- <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}

    {{-- <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}"> --}}
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/CustomLogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{route('logout')}}" role="button">
              <i class="fas fa-sign-out-alt fa-lg"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="dist/img/CustomLogo.png" alt="Custom Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Project Name</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Syed Shazeedul Islam</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard')?'active':''}}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p> Dashboard </p>
                </a>
              </li>
              <li class="nav-item {{request()->is('neworder')?'menu-open':(request()->is('manageorder')?'menu-open':'')}}">
                <a href="#" class="nav-link {{request()->is('neworder')?'active':(request()->is('manageorder')?'active':'')}}">
                  <i class="nav-icon fas fa-edit"></i>
                  <p> Orders <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('neworder')}}" class="nav-link {{request()->is('neworder')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>New Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('manageorder')}}" class="nav-link {{request()->is('manageorder')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Order</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{request()->is('addproduct')?'menu-open':(request()->is('manageproduct')?'menu-open':'')}}">
                <a href="#" class="nav-link {{request()->is('addproduct')?'active':(request()->is('manageproduct')?'active':'')}}">
                  <i class="nav-icon fas fa-list"></i>
                  <p> Products <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('addproduct')}}" class="nav-link {{request()->is('addproduct')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Products</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('manageproduct')}}" class="nav-link {{request()->is('manageproduct')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Products</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{request()->is('addcategory')?'menu-open':(request()->is('managecategory')?'menu-open':'')}}">
                <a href="#" class="nav-link {{request()->is('addcategory')?'active':(request()->is('managecategory')?'active':'')}}">
                  <i class="nav-icon fas fa-stream"></i>
                  <p> Category <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('addcategory')}}" class="nav-link {{request()->is('addcategory')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
										  	<a href="{{route('managecategory')}}" class="nav-link {{request()->is('managecategory')?'active':''}}"> <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                  </a>
              </li> --}}
            </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copyright"></i>
                <p> CMS </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p> Settings </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('logout')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p> Logout </p>
              </a>
            </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12"> @if (session('status')) <div class="alert alert-success">
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> @endif </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div> @yield('content')
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 Bdtaskproject.</strong> All rights reserved.
      </footer>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      <!-- jQuery -->
      <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- ChartJS -->
      <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
      <!-- daterangepicker -->
      <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
      <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      
      <!-- overlayScrollbars -->
      <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('dist/js/adminlte.js')}}"></script>
      <script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>

      {{-- <!-- Summernote -->
      <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script> --}}

      {{-- <!-- DataTables  & Plugins -->
      <script src="{{asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('../../plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('../../plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('../../plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}

      <!-- Summernote & Data Table JS -->
      <script src="{{asset('dist/js/custom.js')}}"></script>
  </body>
</html>