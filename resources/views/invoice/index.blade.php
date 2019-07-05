@extends('layouts.app')

@section('content')
    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-tags"></i>&nbsp;List Invoice</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">
                                <h3 class="card-title">Manajemen Invoice</h3>
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
                                    <th >Invoice ID</th>
                                    <th >Nama Lengkap</th>
                                    <th width="10%">No Telp</th>
                                    <th width="8%">Total Item</th>
                                    <th width="15%">Subtotal</th>
                                    <th width="12%">Pajak</th>
                                    <th width="10%">Total</th>
                                    <th width="25%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoice as $row)
                                    <tr>
                                        <td><strong>#{{ $row->id }}</strong></td>
                                        <td>{{ $row->customer->name }}</td>
                                        <td>{{ $row->customer->phone }}</td>
                                        <td><span class="badge badge-success">{{ $row->detail->count() }} Item</span></td>
                                        <td>Rp {{ number_format($row->total) }}</td>
                                        <td>Rp {{ number_format($row->tax) }}</td>
                                        <td>Rp {{ number_format($row->total_price) }}</td>
                                        <td>
                                            <form action="{{ route('invoice.destroy', $row->id) }}" method="POST" align="center">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                 <a href="{{ route('invoice.print', $row->id) }}" class="btn btn-info btn-xs"><i class="menu-icon icon-print"></i>Cetak</a>
                                                <a href="{{ route('invoice.edit', $row->id) }}" class="btn btn-warning btn-xs"><i class="menu-icon icon-pencil"></i>Ubah</a>
                                                <button class="btn btn-danger  btn-xs"><i class="menu-icon icon-trash">Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-right">
                            <!-- {{ $invoice->links() }} -->
                        </div>
                    </div>
                </div>
            </div>
@endsection
