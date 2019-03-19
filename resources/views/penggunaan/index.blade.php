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
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th class="hidden-phone">Engine version</th>
                            <th class="hidden-phone">CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                            Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td class="center hidden-phone">4</td>
                            <td class="center hidden-phone">X</td>
                        </tr>
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