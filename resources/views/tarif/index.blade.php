@extends('layouts.template')
@section('judul', 'Daftar Tarif')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Tarif Air</h2>
            </header>

            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>Tipe</th>
                            <th>Tarif 0 - 10 (m3)</th>
                            <th>Tarif > 10 - 20 (m3)</th>
                            <th>Tarif > 20 - 30 (m3)</th>
                            <th>Tarif > 30 (m3)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ta as $air)
                        <tr>
                            <td>{{ $t->find($air->id)->layanan->nm_layanan }}</td>
                            @for ($i = 0; $i <= $count; $i++)
                            <td>{{ $t->where('layanan_id', $air->layanan_id)->pluck('tarif')->first()[$i] }}</td>
                            @endfor
                            <td>Edit</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Tarif Listrik</h2>
            </header>

            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>Tipe</th>
                            <th>Tarif 0 - 10 (KWh)</th>
                            <th>Tarif > 10 - 20 (KWh)</th>
                            <th>Tarif > 20 - 30 (KWh)</th>
                            <th>Tarif > 30 (KWh)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tl as $listrik)
                        <tr>
                            <td>{{ $t->find($listrik->id)->layanan->nm_layanan }}</td>
                            @for ($k = 0; $k <= $count; $k++)
                            <td>{{ $t->where('layanan_id', $listrik->layanan_id)->pluck('tarif')->first()[$k] }}</td>
                            @endfor
                            <td>Edit</td>
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