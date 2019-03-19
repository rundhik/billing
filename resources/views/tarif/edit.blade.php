@extends('layouts.template')
@section('judul', 'Edit Tarif')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Edit Tarif {{ $tar->find($t->id)->layanan->nm_layanan}}</h2>
            </header>

            <div class="panel-body">

                <form class="form-horizontal form-bordered" method="POST" action="{{ route('rare.update', $t->id) }}">
                    @csrf 
                    @method('PUT')
                    <div class="form-group">
                        @if ($t->id == 1)
                        <label class="col-md-3 control-label">Tarif 0 - 10 m3</label>
                        @else
                        <label class="col-md-3 control-label">Tarif 0 - 10 KWh</label>
                        @endif
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="tarif[0]" value="{{ $t->tarif[0]}}">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($t->id == 1)
                        <label class="col-md-3 control-label">Tarif >10 - 20 m3</label>
                        @else
                        <label class="col-md-3 control-label">Tarif >10 - 20 KWh</label>
                        @endif
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="tarif[1]" value="{{ $t->tarif[1]}}">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($t->id == 1)
                        <label class="col-md-3 control-label">Tarif >20 - 30 m3</label>
                        @else
                        <label class="col-md-3 control-label">Tarif >20 - 30 KWh</label>
                        @endif
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="tarif[2]" value="{{ $t->tarif[2]}}">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($t->id == 1)
                        <label class="col-md-3 control-label">Tarif >30 m3</label>
                        @else
                        <label class="col-md-3 control-label">Tarif >30 KWh</label>
                        @endif
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="tarif[3]" value="{{ $t->tarif[3]}}">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('rare.index') }}" class="btn btn-default">Batal</a>
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