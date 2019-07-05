@extends('layouts.app')

@section('content')
    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-user"></i>&nbsp; Halaman Customer</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">
                                  <h3 class="card-title">Manajemen Data Pelanggan</h3> <a href="{{ url('/customer/new') }}" class="btn btn-success btn-sm"><i class="menu-icon icon-plus"></i> Tambah Data</a>
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
                                    <th>Nama Lengkap</th>
                                    <th>No. Telpon</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ str_limit($customer->address, 50) }}</td>
                                        <td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td>
                                        <td>
                                            <form action="{{ url('/customer/' . $customer->id) }}" method="POST" align="center">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                <a href="{{ url('/customer/' . $customer->id) }}" class="btn btn-warning btn-xs"><i class="menu-icon icon-pencil"></i>Ubah</a>
                                                <button class="btn btn-danger btn-xs"><i class="menu-icon icon-trash"> Hapus</i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('invoice.store') }}" method="post" align="center">
                                                @csrf
                                                <input type="hidden" name="customer_id" value="{{ $customer->id }}" class="form-control">
                                                <button class="btn btn-primary btn-xs"><i class="menu-icon icon-edit"></i> Buat Invoice</button>
                                            </form>
                                        </td>
                                     </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="5">Tidak ada data</td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection

