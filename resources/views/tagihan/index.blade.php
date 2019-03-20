@extends('layouts.template')
@section('judul', 'Daftar Tagihan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    {{-- <a href="#" class="fa fa-times"></a> --}}
                </div>
                <h2 class="panel-title">Tagihan Air</h2>
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
                            <td>{{ $a->tarif[$i] }}</td>
                            @endfor
                            <td><a href="{{ route('bill.edit', $air->id)}}"><i class="fa fa-pencil"></i></a></td>
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
                <h2 class="panel-title">Tagihan Listrik</h2>
            </header>

            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Tagihan</th>
                            <th>Nama Pelanggan</th>
                            <th>Tipe</th>
                            <th>Periode Tagihan</th>
                            <th>Meter Awal</th>
                            <th>Meter Akhir</th>
                            <th>Meter Digunakan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tl as $listrik)
                        <tr>
                            <td>{{ $t->find($listrik->id)->layanan->nm_layanan }}</td>
                            @for ($k = 0; $k <= $count; $k++)
                            <td>{{ $l->tarif[$k] }}</td>
                            @endfor
                            <td><a href="{{ route('bill.edit', $listrik->id)}}"><i class="fa fa-pencil"></i></a></td>
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