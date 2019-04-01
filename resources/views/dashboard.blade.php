@extends('layouts.template')
@section('judul', 'Dasbor')

@section('konten')
        
            <!-- start: page --> 
            <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        
                        <section class="panel panel-featured-left panel-featured-primary">
                            <div class="panel-body">
                                <div class="widget-summary widget-summary-md">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-primary">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="widget-summary-col">
                                        <div class="summary">
                                            <h4 class="title">Informasi Customer</h4>
                                            <div class="info">
                                                <a class="mb-xs mt-xs mr-xs btn btn-xs btn-primary" href="{{ route('cust.index') }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="panel panel-featured-left panel-featured-primary">
                            <div class="panel-body">
                                <div class="widget-summary widget-summary-md">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-primary">
                                            <i class="fa fa-money"></i>
                                        </div>
                                    </div>
                                    <div class="widget-summary-col">
                                        <div class="summary">
                                            <h4 class="title">Informasi Tarif</h4>
                                            <div class="info">
                                                <a class="mb-xs mt-xs mr-xs btn btn-xs btn-primary" href="{{ route('fare.index') }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">

                        <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <div class="widget-summary widget-summary-md">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fa fa-tachometer"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Informasi Penggunaan</h4>
                                                <div class="info">
                                                    <a class="mb-xs mt-xs mr-xs btn btn-xs btn-primary" href="{{ route('usage.index') }}">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        
                        <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <div class="widget-summary widget-summary-md">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fa fa-file-text-o"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Informasi Cetak Tagihan</h4>
                                                <div class="info">
                                                    <a class="mb-xs mt-xs mr-xs btn btn-xs btn-primary" href="{{ route('bill.index') }}">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                
                    </div>
            </div>
            <!-- end: page -->
@endsection

@push('data-table')
    <script src="{{ asset('js/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('js/examples.datatables.tabletools.js') }}"></script>
@endpush