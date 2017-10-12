<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Depot Mawar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>D</b>Ma</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Depot</b>Mawar</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="adm_dash/logout">
                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs"><b>LOGOUT</b></span>
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="/adm_dash_user"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Menu Utama</li>
                <li class="treeview">
                    <a href="/adm_dash">
                        <i class="fa fa-lg fa-home"></i>&nbsp;&nbsp;<span>BERANDA</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-lg fa-shopping-cart"></i>&nbsp;
                        <span>PESANAN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        <ul class="treeview-menu">
                            <li><a href="/adm_pesanan"> Menunggu Pesanan</a></li>
                            <li><a href="/adm_pesanan_terima"> Terima Pesanan</a></li>
                            <li><a href="/adm_pesanan_tolak"> Tolak Pesanan</a></li>
                        </ul>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-lg fa-cutlery"></i>&nbsp;
                        <span>MAKANAN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        <ul class="treeview-menu">
                            <li><a href="/adm_t_makanan"> Tambah Makanan</a></li>
                            <li><a href="/adm_d_makanan"> Daftar Makanan</a></li>
                        </ul>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-lg fa-coffee"></i>&nbsp;
                        <span>MINUMAN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/adm_t_minuman"> Tambah Minuman</a></li>
                        <li><a href="/adm_d_minuman"> Daftar Minuman</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/adm_pelanggan">
                        <i class="fa fa-lg fa-address-book" aria-hidden="true"></i>&nbsp;
                        <span>PELANGGAN</span>
                        <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-lg fa-book" aria-hidden="true"></i>&nbsp;&nbsp;<span>LAPORAN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/adm_laporan_harian"> Laporan Harian</a></li>
                        <li><a href="/adm_laporan_bulanan"> Laporan Bulanan</a></li>
                    </ul>
                </li>
                <!--<li class="treeview">
                    <a href="/adm_kurir">
                        <i class="fa fa-lg fa-truck"></i>&nbsp;&nbsp;<span>KURIR</span>
                    </a>
                </li>-->
                <li class="treeview">
                    <a href="/adm_kurir">
                        <i class="fa fa-lg fa-comment"></i>&nbsp;&nbsp;<span>TESTIMONI</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/adm_testimoni"> Testimoni Baru</a></li>
                        <li><a href="/adm_d_testimoni"> Daftar Testimoni</a></li>
                    </ul>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
        <!-- /.sidebar -->
</div>
