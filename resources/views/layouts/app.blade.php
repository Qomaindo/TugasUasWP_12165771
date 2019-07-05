<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('images/anonymous.png') }}">
        <title>12165771 | Abd Muklis Miftakhudin</title>
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Laravel Invoice </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{ Auth::user()->name }}
                                </a>
                              
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('images/user.png') }}" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a>Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <!-- <li><a href="#">Logout</a></li> -->
                                    <li>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="menu-icon icon-signout"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="{{ url('/home') }}"><i class="menu-icon icon-home"></i>Beranda
                                </a></li>
                                <li class="active"><a href="{{ url('/employee') }}"><i class="menu-icon icon-envelope"></i>Karyawan
                                </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-list">
                                </i><i class="icon-chevron-down pull-right"></i>
                                </i>Data Master </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="{{ url('/product') }}"><i class="icon-inbox"></i>Produk </a></li>
                                        <li><a href="{{ url('/customer') }}"><i class="icon-inbox"></i>Customer </a></li>
                                    </ul>
                                </li>
                            </ul>
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="{{ route('invoice.create') }}"><i class="menu-icon icon-shopping-cart"></i> Buat Invoice </a></li>
                                <li><a href="{{ route('invoice.index') }}"><i class="menu-icon icon-book"></i>Daftar List Invoice </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <!-- <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li> -->
                                <li>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="menu-icon icon-signout"></i>Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/#btn-controls-->
                            @yield('content')
                        <!--/.content-->
                    </div></div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="{{ asset('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/common.js') }}" type="text/javascript"></script>
      
    </body>
