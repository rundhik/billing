@extends('layouts.template')
@section('judul', 'Tambah Pelanggan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Tambah Pelanggan</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" method="POST" action="{{ route('cust.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Pelanggan</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="nm_customer">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Telp</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="telp">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('cust.index') }}" class="btn btn-default">Batal</a>
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