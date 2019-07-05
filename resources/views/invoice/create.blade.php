@extends('layouts.app')

@section('content')
   <div class="module">
                                <div class="module-head">
                                    <h3>
                                        <i class="menu-icon icon-shopping-cart"></i>&nbsp;Buat Invoice</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">
                        <h3 class="card-title">Buat Invoice</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('invoice.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="customer_id" class="form-control" required>
                                    <option value="">Pilih</option>
                                    @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }} - {{ $customer->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm"><i class="menu-icon icon-edit"></i> Buat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
