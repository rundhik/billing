@extends('layouts.template')
@section('judul', 'Edit Pelanggan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('cust.destroy', $c->id) }}">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Pelanggan</h2>
                <div class="panel-actions">
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </header>

            <div class="panel-body">

                    @csrf @method('DELETE')
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Pelanggan</label>
                        <div class="col-md-3">
                            <span class="form-control">{{ $c->nm_customer }} </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-3">
                            <span class="form-control">{{ $c->alamat }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Telp</label>
                        <div class="col-md-3">
                            <span class="form-control">{{ $c->telp }}</span>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
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