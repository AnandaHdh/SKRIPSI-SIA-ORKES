@extends('layouts.app')
@section('content')
@if(auth()->guard('member')->check())
@include('layouts.partials.header', [
    'judul' => 'Dashboard Member'
])
@else
@include('layouts.partials.header', [
    'judul' => 'Dashboard Admin'
])
@endif

<style>
    .panjang{
        height: 100px;
        text-align: center;
        background-image: linear-gradient(to left, #c36ac2 , #6aab06);
    }
    .oke{
        background-image: linear-gradient(to right, #c36ac2 , #6aab06);
    }
</style>
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header text-center oke" style="background-color: rgb(0, 0, 0); color:white">Booking Baru</div>
                        <div class="card-body panjang">
                            @php
                                $sewa = App\Models\Sewa::where('status', 0)->get();
                            @endphp
                            <h1>{{ count($sewa) }}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header text-center oke" style="background-color: rgb(0, 0, 0); color:white">Booking Berlangsung</div>
                        <div class="card-body panjang">
                            @php
                                $sewa = App\Models\Sewa::where('status', 2)->get();
                            @endphp
                            <h1>{{ count($sewa) }}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header text-center oke" style="background-color: rgb(0, 0, 0); color:white">Booking Selesai</div>
                        <div class="card-body panjang">
                            @php
                                $sewa = App\Models\Sewa::where('status', 3)->get();
                            @endphp
                            <h1>{{ count($sewa) }}</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
