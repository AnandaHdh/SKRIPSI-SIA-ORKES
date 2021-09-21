@extends('layouts.app')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@include('layouts.partials.header', [
    'judul' => 'Laporan Bulanan'
])

<br/>
<br/>
<div class="mdk-header-layout_content mdk-header-layoutcontent--fullbleed mdk-header-layout_content--scrollable page">
    <div class="card">
        <div class="card-header">
            <div class="row no-gutters">
                <div class="col-md-12" align="right" style="padding:10px;">
                    @if(request()->has('waktu'))
                    @php
                        $pizza  = request()->waktu;
                        $pieces = explode("-", $pizza);
                        $filter = App\Models\Sewa::where('tgl_acara', '<=', date('Y-m-d', strtotime($pieces[1])))->where('created_at', '>=', date('Y-m-d', strtotime($pieces[0])))->orderBy('tgl_acara', 'desc')->get();
                    @endphp
                    @endif

                    <form method="get">
                    <div class="row">
                        <div class="col-lg-12 textp-right">
                            <div class="row">
                                <div class="col-lg-4">
                                    <fieldset class="form-group">
                                        <div class="form-control-wrapper form-control-icon-left">
                                            <input type="text" name="waktu" class="form-control" id="reportrange" placeholder="Filter Berdasarkan Waktu" autocomplete="off">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-1">
                                    <button class="btn btn-md btn-primary" type="submit"> Filter</button>
                                </div>
                                @if(request()->has('waktu'))
                                <div class="col-lg-1">
                                    <a href="{{ route('laporan.index') }}" class="btn btn-md btn-info">
                                        Reset
                                    </a>
                                </div>
                                @endif
                                <div class="col-lg-1">
                                    @include('epanel.admin.laporan.top', [
                                    'judul' => '',
                                    'subjudul' => '',
                                    'cetak' => request()->fullUrl() . (request()->has('waktu') ? '&' : '?') . 'purpose=cetak'])
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
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
                        </tr>
                    </thead>
                    <tbody>
                        @if(request()->has('waktu'))
                            @foreach ($filter as $temp_filter)
                            <tr>
                                <td>
                                    {{ $temp_filter->acara }}
                                </td>
                                <td>
                                    {{ date('d F Y', strtotime($temp_filter->tgl_acara)) }}
                                </td>
                                <td>
                                    {{ $temp_filter->member->name }}
                                </td>
                                <td>
                                    {{ $temp_filter->tempat->daerah }}
                                </td>
                                <td>
                                    Rp. {{ number_format($temp_filter->tempat->harga->harga, 2, '.', ',') }}
                                </td>
                                <td>
                                    {{ $temp_filter->tempat->harga->waktu }}
                                </td>
                            </tr>
                            @endforeach
                        @else
                        @foreach ($data as $temp)
                            <tr>
                                <td>
                                    {{ $temp->acara }}
                                </td>
                                <td>
                                    {{ date('d F Y', strtotime($temp->tgl_acara)) }}
                                </td>
                                <td>
                                    {{ $temp->member->name }}
                                </td>
                                <td>
                                    {{ $temp->tempat->daerah }}
                                </td>
                                <td>
                                    Rp. {{ number_format($temp->tempat->harga->harga, 2, '.', ',') }}
                                </td>
                                <td>
                                    {{ $temp->tempat->harga->waktu }}
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection