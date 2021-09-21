@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Data Struk '
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <div class="card">
        <div class="card-header">
            <div class="card-block">
                <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ACARA</th>
                            <th>TANGGAL ACARA</th>
                            <th>MEMBER</th>
                            <th>LOKASI</th>
                            <th>BIAYA</th>
                            <th>WAKTU</th>
                            <th>TANGGAL MASUK</th>
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
            order: [[ 7, "des" ]],
            processing: true,
            serverSide: true,
            ajax: '{!! request()->fullUrl() !!}?datatable=true',
            columns: [
                    { data: 'acara', name: 'acara' },
                    { data: 'tgl_acara', name: 'tgl_acara' },
                    {data:'member', name:'member'},
                    {data:'tempat', name:'tempat'},
                    {data:'harga', name:'harga'},
                    {data:'waktu', name:'waktu'},
                    {data:'masuk', name:'masuk'},
                    {data:'aksi', name:'aksi'}
                ]
        });
    });
</script>
@endsection
