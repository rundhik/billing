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
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Periode</th>
                            <th>Meter Awal (m3)</th>
                            <th>Meter Akhir (m3)</th>
                            <th>Penggunaan (m3)</th>
                            <th>Tagihan (m3)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($a as $air)
                        <tr>
                            <td>{{ $air->id }}</td>
                            <td>{{ $air->tagihan_kode }}</td>
                            <td>{{ $t->find($air->id)->penggunaan->customer->nm_customer }}</td>
                            <td>{{ $t->find($air->id)->penggunaan->layanan->nm_layanan }}</td>
                            <td>{{ $t->find($air->id)->penggunaan->periode->deskripsi }}</td>
                            <td>{{ number_format($air->meter_awal,0,'.',',') }}</td>
                            <td>{{ number_format($air->meter_akhir,0,'.',',') }}</td>
                            <td>{{ number_format($air->meter_digunakan,0,'.',',') }}</td>
                            <td>{{ "Rp. ".number_format(array_sum($air->tagihan),0,'.',',') }}</td>
                            <td>
                                <a href="{{ route('bill.show', $air->id)}}" class="mb-xs mt-xs mr-xs btn btn-xs btn-default"  target="_blank">
                                    <i class="fa fa-file-text" alt='Cetak'></i>
                                    <span >Cetak ulang</span>
                                </a>
                            </td>
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
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools2" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Periode</th>
                            <th>Meter Awal (KWh)</th>
                            <th>Meter Akhir (KWh)</th>
                            <th>Penggunaan (KWh)</th>
                            <th>Tagihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($l as $listrik)
                        <tr>
                            <td>{{ $listrik->id }}</td>
                            <td>{{ $listrik->tagihan_kode }}</td>
                            <td>{{ $t->find($listrik->id)->penggunaan->customer->nm_customer }}</td>
                            <td>{{ $t->find($listrik->id)->penggunaan->layanan->nm_layanan }}</td>
                            <td>{{ $t->find($listrik->id)->penggunaan->periode->deskripsi }}</td>
                            <td>{{ number_format($listrik->meter_awal,0,'.',',') }}</td>
                            <td>{{ number_format($listrik->meter_akhir,0,'.',',') }}</td>
                            <td>{{ number_format($listrik->meter_digunakan,0,'.',',') }}</td>
                            <td>{{ "Rp. ".number_format(array_sum($listrik->tagihan),0,'.',',') }}</td>
                            <td>
                                <a href="{{ route('bill.show', $listrik->id)}}" class="mb-xs mt-xs mr-xs btn btn-xs btn-default"  target="_blank">
                                        <i class="fa fa-file-text" alt='Cetak'></i>
                                        <span >Cetak ulang</span>
                                </a>
                            </td>
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