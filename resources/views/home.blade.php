@extends('layouts.app')

@section('content')
    
<div class="btn-controls">
                                <!-- <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            Growth</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a>
                                </div> -->
                            </div>
<div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-home"></i> Halaman Beranda</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 200px"><br><br>
                                        <h1 align="center" style="padding-top: 75px">Selamat Datang Di Web Invoice</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
  <div class="col-lg-12 col-xs-12">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    </div>


@endsection
