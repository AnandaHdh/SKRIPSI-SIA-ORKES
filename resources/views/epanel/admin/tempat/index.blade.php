@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Data Tempat'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <div class="card">
        <div class="card-header">
            <div class="row no-gutters">
                <div class="col-md-12" align="right" style="padding:10px;">
                    <a href="{{ route('alamat.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
            <div class="card-block">
                <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>DAERAH</th>
                            <th>HARGA DAN WAKTU</th>
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
            order: [[ 0, "asc" ]],
            processing: true,
            serverSide: true,
            ajax: '{!! request()->fullUrl() !!}?datatable=true',
            columns: [
                    { data: 'daerah', name: 'daerah' },
                    { data: 'harga', name: 'harga' },
                    { data: 'aksi', name: 'aksi', className: 'tombol' }
                ]
        });
    });
</script>
@endsection
