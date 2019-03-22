@extends('layouts.template')
@section('judul', 'Generate Penggunaan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Generate Penggunaan {{ $l->nm_layanan}}</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" action="{{ route('usage.store') }}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Pelanggan</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="customer_id" value="{{ $c->id}}">
                            <input type="text" class="form-control" value="{{ $c->nm_customer}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Layanan</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="layanan_id" value="{{ $l->id}}">
                            <input type="text" class="form-control" value="{{ $l->nm_layanan}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Periode</label>
                        <div class="col-md-3">
                            <input type="hidden" class="form-control" name="periode_id" value="{{ $pr->id}}">
                            <input type="text" class="form-control" value="{{ $pr->deskripsi}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meter</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="meter">
                            @if ($p !== NULL )
                            <span class="help-block">Harus diisi lebih besar dari penggunaan sebelumnya.<br/> Meter bulan lalu : {{ $p->meter }}  </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('usage.index') }}" class="btn btn-default">Batal</a>
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