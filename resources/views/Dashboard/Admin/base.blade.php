@extends('Dashboard.base')

{{-- dashboard.tonav  , dashboard.topnav_action , dashboard.name    ,  dashboard.content,   dashboard.script,   dashboard.style --}}


@section('body_class')
    hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed
@endsection

@section('style')
    @yield('dashboard.style')
@endsection

@section('header_main')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('dashboard.header')
@endsection

@section('body')
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                @yield('dashboard.tonav')
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                @yield('dashboard.topnav_action')
                <li class="nav-item">
                    <a href="{{ route('User.logout') }}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p class="d-inline">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('Admin.index') }}" class="brand-link logo-switch">
                <p class="brand-image-xl logo-xs" style="font-weight:bold">Rss</p>
                <p class="brand-image-xs logo-xl" style="font-weight:bold">Rjy Rss</p>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <span class="fas fa-user"></span>
                    </div>
                    <div class="info" style="padding-top:0px;">
                        <a href="{{ route('Admin.index') }}" class="d-block">
                            {{ Auth::user()->name }} </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    {{--                 <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('Course.index') }}" class="nav-link" id="stu_drop">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Courses Manager
                    </p>
                    </a>
                    </li>
                    </ul> --}}
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link" id="user_menu_drop">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    User's Manager
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" id="user_menu">
                                <li class="nav-item ">
                                    <a href="{{ route('Admin.Users.view') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0 text-dark">@yield('dashboard.name')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    @yield('dashboard.content')
                </div>
            </section>

        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2021 <a href="#" target="_blank">IT-wing Rss — @rjy</a>.</strong>
            All rights reserved.
        </footer>
    </div>
@endsection



@section('script')
    <script src="{{ mix('js/admin/base.js') }}"></script>
    @yield('dashboard.script')
@endsection
