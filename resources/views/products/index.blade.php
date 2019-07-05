@extends('layouts.app')

@section('content')
    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-heart-empty
glyphicon "></i>&nbsp;Halaman Produk</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">
                                <h3 class="card-title">Manajemen Produk</h3> <a href="{{ url('/product/new') }}" class="btn btn-success btn-sm"><i class="menu-icon icon-plus"></i> Tambah Data</a>
                        </div>
                    </div><br>
                    <div class="x_content">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Tanggal</th>
                                    <th width="18%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ str_limit($product->description, 50) }}</td>
                                    <td>Rp {{ number_format($product->price) }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <form action="{{ url('/product/' . $product->id) }}" method="POST" align="center">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/product/' . $product->id) }}" class="btn btn-warning btn-xs"><i class="menu-icon icon-pencil"></i> Ubah</a> 
                                            <button class="btn btn-danger btn-xs"><i class="menu-icon icon-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div></div>
                </div>
@endsection
