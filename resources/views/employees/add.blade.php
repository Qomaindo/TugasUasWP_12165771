@extends('layouts.app')

@section('content')
   <div class="module">
                                <div class="module-head">
                                    <h3 class="card-title">Tambah Data Pegawai</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/employee') }}" method="post">
                            @csrf
                            <div class="control-group">
                                <label class="control-label" for="">Nama Lengkap</label>
                                <input class="span8" type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" placeholder="Masukkan nama lengkap">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="span8" type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">No Telphone</label>
                                <input class="span8" type="text" name="notlp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" cols="5" rows="5" class="span8 {{ $errors->has('address') ? 'is-invalid':'' }}"></textarea>
                                <p class="text-danger">{{ $errors->first('address') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm"><i class="menu-icon icon-download-alt"></i>  Simpan</button>
                                <a href="{{ url('/employee') }}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
