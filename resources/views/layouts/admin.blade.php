<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin @yield('title') </title>

  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- custome css -->
    <link rel="stylesheet" href="{{asset('/dist/css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/CustomLogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('dist/img/CustomLogo.png')}}" alt="Custom Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('adminprofile')}}" class="d-block">Syed Shazeedul Islam</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('adminDashboard')}}" class="nav-link {{request()->is('admin_dashboard')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>

          </li>
          <li class="nav-item {{request()->is('neworder')?'menu-open':(request()->is('manageorder')?'menu-open':(request()->is('addorder')?'menu-open':''))}}">
            <a href="#" class="nav-link {{request()->is('neworder')?'active':(request()->is('manageorder')?'active':(request()->is('addorder')?'active':''))}}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
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
              <li class="nav-item">
                <a href="{{route('addorder')}}" class="nav-link {{request()->is('addorder')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Order</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('addproduct')?'menu-open':(request()->is('manageproduct')?'menu-open':'')}}">
            <a href="#" class="nav-link {{request()->is('addproduct')?'active':(request()->is('manageproduct')?'active':'')}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
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
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link {{request()->is('addcategory')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('users')}}" class="nav-link {{request()->is('users')?'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item {{request()->is('addbanner')?'menu-open':(request()->is ('contact_us')?'menu-open':(request()->is ('delivery_info')?'menu-open':(request()->is ('policy')?'menu-open':(request()->is ('sitemap')?'menu-open':(request()->is ('addposter')?'menu-open':(request()->is ('sociallink')?'menu-open':''))))))}}">
            <a href="#" class="nav-link {{request()->is('addbanner')?'active':(request()->is ('contact_us')?'active':(request()->is ('delivery_info')?'active':(request()->is('policy')?'active':(request()->is('addposter')?'active':(request()->is('sociallink')?'active':'')))))}}">
              <i class="nav-icon fas fa-copyright"></i>
              <p>
                CMS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('banner')}}" class="nav-link {{request()->is('addbanner')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contactus')}}" class="nav-link {{request()->is('contact_us')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sociallink')}}" class="nav-link {{request()->is('sociallink')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Link</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('deliveryinfo')}}" class="nav-link {{request()->is('delivery_info')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addprivacypolicy')}}" class="nav-link {{request()->is('policy')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('poster')}}" class="nav-link {{request()->is('addposter')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Poster
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('app_settings')?'menu-open':(request()->is('sms_settings')?'menu-open':(request()->is('email_settings')?'menu-open':''))}}">
            <a href="#" class="nav-link {{request()->is('app_settings')?'active':(request()->is('sms_settings')?'active':(request()->is('email_settings')?'active':''))}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('appsettings')}}" class="nav-link {{request()->is('app_settings')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('smssettings')}}" class="nav-link {{request()->is('sms_settings')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('emailsettings')}}" class="nav-link {{request()->is('email_settings')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Settings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('ticket')}}" class="nav-link {{request()->is('ticket')?'active':''}}">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('subscriber')}}" class="nav-link {{request()->is('subscriber')?'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Subscriber
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
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
                <div class="col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->any())
                      <div class="alert alert-danger">
                        {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                </div>             
            </div>
        </div><!-- /.container-fluid -->
    </div>
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 Bdtaskproject.</strong>
    All rights reserved.
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
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <!-- <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script> -->
    <script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- DataTables  & Plugins -->
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
    <script src="{{asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Data Table & Summernote JS -->
    <script src="{{asset('dist/js/Authlogin/custom.js')}}"></script>
</body>
</html>
