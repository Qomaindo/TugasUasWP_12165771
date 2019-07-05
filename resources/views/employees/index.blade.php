@extends('layouts.app')

@section('content')
    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-user"></i>&nbsp; Halaman employee</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">
                                  <h3 class="card-title">Manajemen Data Pegawai</h3> <a href="{{ url('/employee/new') }}" class="btn btn-success btn-sm"><i class="menu-icon icon-plus"></i> Tambah Data</a>
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telpon</th>
                                    <!-- <th>Image</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td><a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></td>
                                        <td>{{ $employee->notlp }}</td>
                                        <!-- <td>{{ str_limit($employee->address, 50) }}</td> -->
                                        <td>
                                            <form action="{{ url('/employee/' . $employee->id) }}" method="POST" align="center">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                <a href="{{ url('/employee/' . $employee->id) }}" class="btn btn-warning btn-xs"><i class="menu-icon icon-pencil"></i>Ubah</a>
                                                <button class="btn btn-danger btn-xs"><i class="menu-icon icon-trash"> Hapus</i></button>
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

