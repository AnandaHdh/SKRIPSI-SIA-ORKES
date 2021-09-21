@extends('layouts.app')
@section('content')
@if (url()->previous() == env('APP_URL') . 'book-pay/index')
@include('layouts.partials.header', [
    'kembali' => route('book-new.pay'),
    'judul' => 'Detail Pesanan'
])
@elseif(url()->previous() == env('APP_URL'). 'book-invoice/index')
@include('layouts.partials.header', [
    'kembali' => route('book-new.invoice'),
    'judul' => 'Detail Pesanan'
])
@else
@include('layouts.partials.header', [
    'kembali' => route('book-new.invoice'),
    'judul' => 'Detail Pesanan'
])
@endif

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <div class="card">
        <div class="card-header text-left">
            <h2>Nomor Order 000{{ $data->id }} </h2>
        </div>
        <h6 style="margin: 10px;">Data Diri Customer</h6>
        <table class="table table-striped" style="width: 400px;">
            <thead>
                <tr>
                   <td>Diorder Oleh</td>
                   <td>:</td>
                   <td>{{ $data->member->name }}</td>
                </tr>
                <tr>
                    <td>Nomor Telpon</td>
                    <td>:</td>
                    <td>{{ $data->member->nomor_hp }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $data->member->alamat }}</td>
                </tr>
                <tr>
                    <td>E - Mail</td>
                    <td>:</td>
                    <td>{{ $data->member->email }}</td>
                </tr>
            </thead>
        </table>

        @if($data->status == 0 || $data->status == 1)
                @if(empty($data->struk))
                @else
                <div class="col-md-8">
                    <div class="form-group">
                        <a href="{{ asset($data->struk) }}"><img id="previewImg" height="500px" width="50%" src="{{ asset($data->struk) }}" alt="Placeholder"></a>
                    </div>
                </div>
                @endif
            @else
            <div class="col-md-8">
                <div class="form-group">
                    <a href="{{ asset($data->struk) }}"><img id="previewImg" height="500px" width="50%" src="{{ asset($data->struk) }}" alt="Placeholder"></a>
                </div>
            </div>
            @endif
        </div>

        <h6 style="margin: 10px;">Data Orderan</h6>
        <div class="row">
            <div class="col-md-4">
                <table class="table table-striped" >
                    <thead>
                        <tr>
                           <td>Jenis Acara</td>
                           <td>:</td>
                           <td>{{ $data->acara }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Acara</td>
                            <td>:</td>
                            <td>{{ date('d F Y', strtotime($data->tgl_acara)) }}</td>
                        </tr>
                        <tr>
                            <td>Daerah Acara</td>
                            <td>:</td>
                            <td>{{ $data->tempat->daerah }}</td>
                        </tr>
                        <tr>
                            <td>Waktu Acara</td>
                            <td>:</td>
                            <td>{{ $data->tempat->harga->waktu }}</td>
                        </tr>
                        <tr>
                            <td>Total Biaya</td>
                            <td>:</td>
                            <td>Rp .{{ number_format($data->tempat->harga->harga, 2,',', '.') }}</td>
                        </tr>
                    </thead>
                </table>
            </div>

           

        @if($data->status == 0)
        <div class="row">
            <div class="text-right mb-5 ml-4">
                <button type="submit" data-id="{{ $data->id }}" class="btn btn-danger" id="tolak">Tolak</a>
            </div>
            <div class="text-right mb-5 ml-4">
                <button type="submit" id="terima" data-id="{{ $data->id }}" class="btn btn-success" >Terimakan</a>
            </div>
        </div>
        @elseif ($data->status == 1)
            @if(empty($data->struk))
            @else
            <div class="row">
            <div class="text-right mb-5 ml-4">
                <button type="submit" id="verifikasi" data-id="{{ $data->id }}" class="btn btn-success">Verifikasi</a>
            </div>

            <div class="text-right mb-5 ml-4">
                <button type="submit" id="tolak" data-id="{{ $data->id }}" class="btn btn-danger">Tolak</a>
            </div>
            </div>
            @endif
        @elseif($data->status == 2)
            <div class="text-left mb-5 ml-4">
                <button type="submit" id="selesai" data-id="{{ $data->id }}" class="btn btn-success">Selesai</a>
            </div>
        @else
        @endif

    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){

            $('#tolak').on('click', function(){
                var confirmattion = confirm("Are you sure to execute this action?");
                if(confirmattion){
                    var id = $(this).data('id');
                    $.ajax({
                        url: "{{route('book-rijected.status')}}" +  '/' + id ,
                        type:"GET",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        dataType:"json",
                        success:function(results){
                            if (results.success) {
                                var name = '{{ env('APP_URL') }}';
				                console.log(name);
				          	    window.location.href = name + '/book-new/index' ;
                            } else {
                                alert('Gagal Ubah Status');
                            }
                        }
                    });
                } else {

                }
            });

            $('#terima').on('click', function(){
                var confirmattion = confirm("Are you sure to execute this action?");
                if(confirmattion){
                    var id = $(this).data('id');
                    $.ajax({
                        url: "{{route('book-update.status')}}" +  '/' + id ,
                        type:"GET",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        dataType:"json",
                        success:function(results){
                            if (results.success) {
                                var name = '{{ env('APP_URL') }}';
				                alert(name);
				          	    window.location.href = name + '/book-new/index';
                            } else {
                                alert('Gagal Ubah Status');
                            }
                        }
                    });
                } else {

                }
            });

            $('#verifikasi').on('click', function(){
                var confirmation = confirm('Anda Yakin Verifikasi Data Ini ?');
                if(confirmation){
                    var id = $(this).data('id');
                    $.ajax({
                        url : "{{ route('book.verifikasi') }}" + '/' + id,
                        type:"GET",
                        dataType:"json",
                        success:function(results){
                            if(results.success){
                                var name = '{{ env('APP_URL') }}';
				                console.log(name);
				          	    window.location.href = name + 'book-invoice/index' ;
                            } else {
                                alert('Gagal ini Asu');
                            }
                        }
                    });
                }
            });


            $('#selesai').on('click', function(){
                var peler = confirm('Apakah Sudah Selesai Manggung ?');
                if(peler){
                    var id = $(this).data('id');
                    $.ajax({
                        url: "{{ route('book.end') }}" + "/" + id,
                        type:"GET",
                        dataType: "json",
                        success:function(results){
                            if(results.success){
                                var name = '{{ env('APP_URL') }}';
                                console.log(name);
                                window.location.href = name + 'book-ending/index';
                            } else {
                                alert('Gagal Ini');
                            }
                        }
                    });
                }
            });

        });
    </script>
@endsection
