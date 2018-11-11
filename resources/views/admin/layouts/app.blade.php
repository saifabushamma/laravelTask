<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('admin') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>D</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">administrator</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/assets/img/Circle-Solid-Profile-512.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>administrator Terkwaz</p>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Terkwaz</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-circle-o"></i><span>Manage users</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href={{route('userlist')}}><i class="fa fa-circle-o"></i> Users list</a></li>
                        <li><a href={{route('adduser')}}><i class="fa fa-circle-o"></i> Add user</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-circle-o"></i><span>Manage items</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href={{route('itemlist')}}><i class="fa fa-circle-o"></i> items list</a></li>
                        <li><a href={{route('additem')}}><i class="fa fa-circle-o"></i> Add item</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-circle-o"></i><span>Manage categories</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href={{route('catlist')}}><i class="fa fa-circle-o"></i> categories list</a></li>
                        <li><a href={{route('addcat')}}><i class="fa fa-circle-o"></i> Add category</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-circle-o"></i><span>Manage admins</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href={{route('adminlist')}}><i class="fa fa-circle-o"></i> admins list</a></li>
                        <li><a href={{route('addadmin')}}><i class="fa fa-circle-o"></i> Add admin</a></li>
                    </ul>
                </li>


                <li>
                    <a href={{route('home')}}>
                        <i class="fa fa-circle"></i><span>Home</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">

    @yield('content')
        <!-- Main content -->

        <!-- /.content -->
    </div>

    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Designed & developed by <a href="http://www.terkwaz.com/">Terkwaz</a></strong>
    </footer>
</div>

<!-- ./wrapper -->







<!-- jQuery 3 -->
<script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js')}}"></script>
<script src="{{asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function () {
        $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    })
</script>

</body>
</html>