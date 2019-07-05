<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Aplikasi Invoice | </title>

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    
    <link href="{{ asset('assets/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ asset('assets/datatables.net-bs/css/dataTables.bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css ') }}" rel="stylesheet">

    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md fixed_sidebar">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/home') }}" class="site_title"><i class="fa fa-book"></i> <span>Aplikasi Invoice</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('assets/images/image.png') }}" alt="..." class="img-circle profile_img" height="60px">
              </div>
              <div class="profile_info">
                <span>Welcome, </span><h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Utama</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                        <a href="{{ url('/product') }}"> Manajemen Produk</a>
                    </li>
                    <li>
                        <a href="{{ url('/customer') }}"> Manajemen Customer</a>
                    </li>
                  </ul>
                </li>
                    <li>
                        <a href="{{ route('invoice.create') }}"> <i class="fa fa-edit"></i> Buat Invoice</a>
                    </li>
                    <li>
                        <a href="{{ route('invoice.index') }}"> <i class="fa fa-list-alt"></i> List Invoice</a>
                    </li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>


        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/image.png') }}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="right_col" role="main">
          
          <div class="row">
            @yield('content')
          </div>
        </div>
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        
    

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/iCheck/icheck.min.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets/DateJS/build/date.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>
    
  </body>
</html>
