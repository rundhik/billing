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
                            <td>{{$usage->meter}}</td>
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