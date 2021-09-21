@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Ubah Data Pesanan'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
	<div class="container-fluid page__container">
		<form method="POST" action="{{ route('member-sewa.update', $data->id) }}" autocomplete="off">
			@csrf
		<div class="card card-form">
			<div class="row no-gutters">
				<div class="col-lg-10 card-form__body card-body">
					<div class="form-group">
						<label for="opass">Keperluan Acara</label>
						<input style="width: 270px;" name="acara" value="{{ $data->acara }}" type="text" class="form-control" placeholder="Nama" required="">
					</div>
                    <div class="form-group">
						<label for="opass">Tanggal Acara</label>
						<input style="width: 270px;" value="{{ $data->tgl_acara }}" name="tgl_acara" type="date" class="form-control" placeholder="Nama" required="">
					</div>
                    <div class="form-group">
						<label for="opass">Daerah Acara</label>
                        @php
                            $alamat = App\Models\Tempat::all();
                        @endphp
						<select name="alamat_id" class="form-control">
                            <option value="0">-- Pilih Lokasi --</option>
                            @foreach ($alamat as $place)
                                <option value="{{ $place->id }}" {{ $place->id == $data->alamat_id ? 'selected' : '' }}>{{ $place->daerah }} - {{ $place->harga->waktu }} - {{ number_format($place->harga->harga, 2, '.' , ',') }}</option>
                            @endforeach
                        </select>
					</div>
				</div>

				<div class="col-lg-2 card-body">
					<a href="{{route('harga.index')}}" class="btn btn-warning">
					<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">keyboard_arrow_left</i>	Back </a>
				</div>
			</div>
		</div>


		<div class="text-right mb-5">
			<button type="submit" onclick="return confirm('Apa Anda Yakin ? ')" class="btn btn-success">Simpan</a>
		</div>
		</form>
	</div>
</div>
<!-- // END header-layout__content -->


@endsection
