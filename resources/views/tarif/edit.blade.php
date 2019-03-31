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

                <form class="form-horizontal form-bordered" method="POST" action="{{ route('fare.update', $t->id) }}">
                    @csrf 
                    @method('PUT')
                    @for ($i = 0; $i < $count; $i++)
                    <label>Rekursif ke {{$i+1}}</label>
                    @if($i == 0)
                        <div class="form-group">
                            @for ($j = 0; $j < count($t->tarif[$i]); $j++)
                            @if($j==0) 
                                <label class="col-md-2 control-label">Min</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}" disabled>
                                </div>
                                @elseif($j==1)
                                <label class="col-md-2 control-label">Max</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}">
                                </div>
                                @else 
                                <label class="col-md-2 control-label">Tarif</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}">
                                </div>
                                @endif
                            @endfor
                        </div>
                    @elseif ($i < ($count-1))
                        <div class="form-group">
                            @for ($j = 0; $j < count($t->tarif[$i]); $j++)
                            @if($j==0) 
                                <label class="col-md-2 control-label">Min</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i-1}}][{{$j+1}}]" value="{{ $t->tarif[$i-1][$j+1] }}" disabled>
                                </div>
                                @elseif($j==1)
                                <label class="col-md-2 control-label">Max</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}">
                                </div>
                                @else 
                                <label class="col-md-2 control-label">Tarif</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}">
                                </div>
                                @endif
                            @endfor
                        </div>
                    @else
                        <div class="form-group">
                            @for ($j = 0; $j < count($t->tarif[$i]); $j++)
                            @if($j==0) 
                                <label class="col-md-2 control-label">Min</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i-1}}][{{$j+1}}]" value="{{ $t->tarif[$i-1][$j+1] }}" disabled>
                                </div>
                                @elseif($j==1)
                                <label class="col-md-2 control-label">Max</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}" disabled>
                                </div>
                                @else 
                                <label class="col-md-2 control-label">Tarif</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="tarif[{{$i}}][{{$j}}]" value="{{ $t->tarif[$i][$j] }}">
                                </div>
                                @endif
                            @endfor
                        </div>
                    @endif
                    
                    @endfor
                    <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('fare.index') }}" class="btn btn-default">Batal</a>
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