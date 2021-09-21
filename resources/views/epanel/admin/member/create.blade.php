@extends('layouts.app')
@section('content')
@include('layouts.partials.header', [
    'judul' => 'Member Create'
])

<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
	<div class="container-fluid page__container">
		<form method="POST" action="{{ route('member.store') }}" autocomplete="off">
			@csrf
		<div class="card card-form">
			<div class="row no-gutters">
				<div class="col-lg-10 card-form__body card-body">
					<div class="form-group">
						<label for="opass">Nama</label>
						<input style="width: 270px;" name="name" type="text" class="form-control" placeholder="Nama" required="">
					</div>
                    <div class="form-group">
						<label for="opass">Alamat</label>
						<input style="width: 270px;" name="alamat" type="text" class="form-control" placeholder="Nama" required="">
					</div>
                    <div class="form-group">
						<label for="opass">Nomor Hp</label>
						<input style="width: 270px;" name="nomor_hp" type="text" class="form-control" placeholder="Nama" required="">
					</div>
					<div class="form-group">
						<label for="cpass">Username (* Untuk Login)</label>
						<input style="width: 270px;" name="email" type="text" class="form-control" placeholder="Username" required="">
					</div>
					<div class="form-group">
						<label for="cpass">Password (* Untuk Login)</label>
						<input style="width: 270px;" name="password" type="password" class="form-control" placeholder="Password" required="">
					</div>
				</div>

				<div class="col-lg-2 card-body">
					<a href="{{route('member.index')}}" class="btn btn-warning">
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
