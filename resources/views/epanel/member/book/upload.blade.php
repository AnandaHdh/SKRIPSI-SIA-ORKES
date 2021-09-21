@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'kembali' => route('member-sewa.index'),
    'judul' => 'Detail Pesanan'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <form method="POST" action="{{ route('member-sewa.struk', $data->id) }}" enctype="multipart/form-data">
        @csrf
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
        <h6 style="margin: 10px;"> <b>Upload Struk</b></h6>
        <div class="row">
        <div class="col-md-8">   
                    
                        <p clas="text-bordered ml-5 mb-5" style="color:black !important"></p>
                        <input type="file" accept="image/png, image/gif, image/jpeg"  name="struk" onchange="previewFile(this);" required>
                        <br>
                        <br>
                        <img id="previewImg" height="500px" width="50%" src="/examples/images/transparent.png" alt="Placeholder">
                       <br>
                        <br>
                    </div>
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
                <div class="col-md-8">   
                    <div class="form-group">
                    <div class="text-left mb-3">
            <button type="submit" onclick="return confirm('Apa Anda Yakin ? ')" class="btn btn-success">Simpan</a>
        </div>
                       
                    </div>
                </div>

            </div>

            

        </div>

       
    </div>
    </form>
</div>
@endsection
@section('scripts')
    <script>

    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    </script>
@endsection
