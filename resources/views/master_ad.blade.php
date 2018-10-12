<!DOCTYPE html>
<html lang="en">
    <head>
      <base href="http://localhost:8082/myNextProject">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin - LeTrong</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ url('public/admin/bower_components/Ionicons/css/ionicons.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ url('public/admin/dist/css/AdminLTE.min.css') }}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ url('public/admin/dist/css/skins/_all-skins.min.css') }}">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ url('public/admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ url('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="active treeview menu-open">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: block;">
                <li><a href="{{url('user/admin')}}"><i class="fa fa-circle-o"></i> Danh sách Admin </a></li>
                <li><a href="{{url('user/users')}}"><i class="fa fa-circle-o"></i> Danh sách Khách hàng </a></li>
                <li><a href="{{url('user/roles')}}"><i class="fa fa-circle-o"></i> Role </a></li>
                <li><a href="{{url('user/permissions')}}"><i class="fa fa-circle-o"></i> Permission </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>    
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          
         @yield('content')
          

        <!-- Main content -->
        
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('public/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public/admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('public/admin/dist/js/demo.js') }}"></script>
    <!-- <script src="{{ url('public/assets/js/custom.js')}}"></script> -->
    <script type="text/javascript">
      $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
    </body>
</html>
