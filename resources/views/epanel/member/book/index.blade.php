@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Data Pesananku'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <div class="card">
        <div class="card-header">
            <div class="row no-gutters">
            <div class="col-md-12" align="left" style="padding:10px;">
               
                <div class="text">*Tekan tombol refresh jika sudah selesai menambahkan data pesanan</p></div>
                </div>
                <div class="col-md-12" align="right" style="padding:10px;">
                <a href="{{ route('member-sewa.index') }}" class="btn btn-info">Refresh</a>
                    <a href="{{ route('member-sewa.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
            <div class="card-block">
                <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ACARA</th>
                            <th>TANGGAL ACARA</th>
                            <th>LOKASI</th>
                            <th>BIAYA</th>
                            <th>WAKTU</th>
                            <th>STATUS</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script> 
    $(document).ready(function(){

        $('#datatable').DataTable({
            order: [[ 6, "des" ]],
            processing: true,
            serverSide: true,
            ajax: '{!! request()->fullUrl() !!}?datatable=true',
            columns: [
                    { data: 'acara', name: 'acara' },
                    { data: 'tgl_acara', name: 'tgl_acara' },
                    {data:'tempat', name:'tempat'},
                    {data:'harga', name:'harga'},
                    {data:'waktu', name:'waktu'},
                    {data:'status', name:'status'},
                    {data:'aksi', name:'aksi'}
                ]
        });
    });

    
</script>
@endsection
