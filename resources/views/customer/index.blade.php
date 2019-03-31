@extends('layouts.template')
@section('judul', 'Daftar Pelanggan')

@section('konten')
        
            <!-- start: page -->        
        <section class="panel">
            <header class="panel-heading">
                    <h2 class="panel-title">Daftar Pelanggan</h2>
                    <div class="panel-actions">
                        <a href="{{ route('cust.create') }}"><button class="btn btn-primary" type="submit">Tambah</button></a>
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                </header>
    
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('css/copy_csv_xls_pdf.swf') }}">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($c as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->nm_customer}}</td>
                                <td>{{$customer->alamat}}</td>
                                <td>{{$customer->telp}}</td>
                                <td>
                                    <a href="{{ route('cust.edit', $customer->id)}}"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('cust.show', $customer->id)}}"><i class="fa fa-trash-o"></i></a>
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