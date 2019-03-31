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
                                @for ($i = 0; $i < $counta; $i++)
                                    @if ($i == 0)
                                        <th>Tarif {{ $a->tarif[$i][0] .' - '. $a->tarif[$i][1] .' '. $a->satuan}}</th>
                                    @elseif ($i > 0 && $i < ($counta-1))
                                        <th>Tarif > {{ $a->tarif[$i][0] .' - '. $a->tarif[$i][1] .' '. $a->satuan }}</th>
                                    @else
                                        <th>Tarif > {{ $a->tarif[$i][0] .' '. $a->satuan }}</th>
                                    @endif
                                @endfor
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ta as $air)
                            <tr>
                                <td>{{ $t->find($air->id)->layanan->nm_layanan }}</td>
                                @for ($i = 0; $i < $counta; $i++)
                                <td>{{ $a->tarif[$i][2] }}</td>
                                @endfor
                                <td><a href="{{ route('fare.edit', $air->id)}}"><i class="fa fa-pencil"></i></a></td>
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
                                @for ($i = 0; $i < $countl; $i++)
                                    @if ($i == 0)
                                        <th>Tarif {{ $l->tarif[$i][0]  .' - '. $l->tarif[$i][1] .' '. $l->satuan }}</th>
                                    @elseif ($i > 0 && $i < ($countl-1))
                                        <th>Tarif > {{ $l->tarif[$i][0] .' - '. $a->tarif[$i][1] .' '. $l->satuan}}</th>
                                    @else
                                        <th>Tarif > {{ $l->tarif[$i][0].' '. $l->satuan }}</th>
                                    @endif
                                @endfor
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tl as $listrik)
                            <tr>
                                <td>{{ $t->find($listrik->id)->layanan->nm_layanan }}</td>
                                @for ($i = 0; $i < $countl; $i++)
                                <td>{{ $l->tarif[$i][2] }}</td>
                                @endfor
                                <td><a href="{{ route('fare.edit', $listrik->id)}}"><i class="fa fa-pencil"></i></a></td>
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