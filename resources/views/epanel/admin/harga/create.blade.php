@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Buat Daftar Harga'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
	<div class="container-fluid page__container">
		<form method="POST" action="{{ route('harga.store') }}" autocomplete="off">
			@csrf
		<div class="card card-form">
			<div class="row no-gutters">
				<div class="col-lg-10 card-form__body card-body">
					<div class="form-group">
						<label for="opass">Waktu</label>
						<input style="width: 270px;" name="waktu" type="text" class="form-control" placeholder="Nama" required="">
					</div>
                    <div class="form-group">
						<label for="opass">Harga</label>
						<input style="width: 270px;" name="harga" type="text" class="form-control" placeholder="Nama" required="">
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
