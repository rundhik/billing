@extends('layouts.template')
@section('judul', 'Generate Tagihan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Generate Tagihan {{ $lay}} milik {{ $cust}}</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" action="{{ route('bill.store') }}" method="POST">
                    @csrf 
                    <input type="hidden" class="form-control" name="penggunaan_id" value="{{ $un->id}}">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Pelanggan</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="customer_id" value="{{ $c}}">
                            <input type="text" class="form-control" value="{{ $cust}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Layanan</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="layanan_id" value="{{ $l}}">
                            <input type="text" class="form-control" value="{{ $lay}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Periode</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="periode_id" value="{{ $p}}">
                            <input type="text" class="form-control" value="{{ $per}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meter bulan lalu</label>
                        <div class="col-md-3">
                            @if ($ub == 0 )
                                <input type="hidden" class="form-control" name="meter_awal" value="{{ $ub }}">
                                <input type="text" class="form-control" value="{{ $ub }}" disabled>
                            @else
                                <input type="hidden" class="form-control" name="meter_awal" value="{{ $ub->meter }}">
                                <input type="text" class="form-control" value="{{ $ub->meter }}" disabled>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meter bulan ini</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="meter_akhir" value="{{ $un->meter }}">
                            <input type="text" class="form-control" value="{{ $un->meter }}" disabled>
                            {{-- @if ($p !== NULL )
                            <span class="help-block">Harus di isi lebih besar dari penggunaan sebelumnya. Penggunaan sebelumnya sebesar {{ $p->meter }}  </span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meter dipakai</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="meter_digunakan" value="{{ $u }}">
                            <input type="text" class="form-control" value="{{ $u }}" disabled>
                            {{-- @if ($p !== NULL )
                            <span class="help-block">Harus di isi lebih besar dari penggunaan sebelumnya. Penggunaan sebelumnya sebesar {{ $p->meter }}  </span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Generate Tagihan</button>
                                {{-- <a href="{{ route('usage.index') }}" class="btn btn-default">Batal</a> --}}
                            </div>
                    </div>
                </form>
            </div>
        </section>

            <!-- end: page -->
@endsection

@push('data-table')
    <script src="{{ asset('js/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.tabletools.js') }}"></script>
@endpush