@extends('layouts.template')
@section('judul', 'Daftar Penggunaan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Pencatatan Penggunaan</h2>
            </header>

            <div class="panel-body">
                <form class="form-horizontal form-bordered" action="{{ route('usage.create') }}">
                    @method('GET')
                    <div class="form-group">
                        <label class="col-md-3 control-label">Customer :</label>
                        <div class="col-md-6">
                            <select name='pelanggan' data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                                    <option value=""></option>
                                    @foreach ($c as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->nm_customer }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Layanan :</label>
                        <div class="col-md-6">
                            <select name='layanan' data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                                    <option value=""></option>
                                    @foreach ($l as $layanan)
                                        <option value="{{ $layanan->id }}">{{ $layanan->nm_layanan }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Generate Penggunaan</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Daftar Penggunaan Air dan Listrik</h2>
            </header>

            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Pelanggan</th>
                            <th>Bulan</th>
                            <th>Type</th>
                            <th>Meter</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p as $usage)
                        <tr>
                            <td>{{$usage->id}}</td>
                            <td>{{$pe->find($usage->id)->customer->nm_customer}}</td>
                            <td>{{$pe->find($usage->id)->periode->kode}}</td>
                            <td>{{$pe->find($usage->id)->layanan->nm_layanan}}</td>
                            <td>{{number_format($usage->meter,0,'.',',') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
            <!-- end: page -->
@endsection

@push('data-table')
    <script src="{{ asset('js/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.tabletools.js') }}"></script>
@endpush