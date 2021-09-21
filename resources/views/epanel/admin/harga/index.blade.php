@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Data Harga'
])



<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    @if (session()->has('success'))
        <h1>{{ session('success') }}</h1>
    @endif
    @if (session()->has('error'))
        <h1>{{ session('error') }}</h1>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row no-gutters">
                <div class="col-md-12" align="right" style="padding:10px;">
                    <a href="{{ route('harga.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
            <div class="card-block">
                <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>HARGA</th>
                            <th>WAKTU</th>
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
                    { data: 'harga', name: 'harga' },
                    { data: 'waktu', name: 'waktu' },
                    { data: 'aksi', name: 'aksi', className: 'tombol' }
                ]
        });
    });
</script>
@endsection
