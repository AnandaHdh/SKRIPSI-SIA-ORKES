<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NADA RUZANDAH REPOT MONTHLY</title>

    <style type="text/css">

@page {
  counter-increment: page;
  margin-left: 0;
  margin-right: 0;
  padding: 0;

  @bottom-center {
    color: #666;
    content: counter(page) "/" counter(pages);
    font: normal 12pt Arial, Helvetica, sans-serif;
  }

}

@page:first {
  margin-top: 0;
}

#meta {
  display: none;
}

#payment-details,
#invoice-other,
#comments {
  page-break-inside: avoid;
}

#invoice {
  border: 0;
  padding: 1cm 1cm 0 1cm;
}

table {
    width: 100%;
    border-collapse: collapse;
}
table.no-border td {
    border-top: 0px;
}
table.border th {
    text-align: left;
    background: rgba(202, 202, 202, 0.24)
}
table.border td, table.border th {
    border: 1px solid #505050;
    padding: 5px;
}

</style>

@if(request()->has('waktu'))
    @php
    $pizza  = request()->waktu;
    $pieces = explode("-", $pizza);
    $filter = App\Models\Sewa::where('tgl_acara', '<=', date('Y-m-d', strtotime($pieces[1])))->where('tgl_acara', '>=', date('Y-m-d', strtotime($pieces[0])))->orderBy('tgl_acara', 'desc')->get();
    @endphp
@endif
</head>
<body>
    <br/>
    <div id="invoice" class="pagestyle" style="margin-top: -80px;">
        <div class="normal-padding" style="padding: 0 0cm">
        <table class="no-border" width="100%">
            <tr>
                <td align="left">
                    <h4 style="margin-bottom: 0">NADA RUZANDAH</h4>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <h2 style="margin: 0;">BOOKING ORDER REPORT</h2>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <p style="margin: 0;"><small>Jl. Mas Penghulu, Gg Sanggam RT 08., Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242</small></p>
                </td>
            </tr>
            @if(request()->has('waktu'))
            <tr>
                <td align="right">
                    <p style="margin: 0;"><small>Periode. <b>{{ tgl_aja(date('Y-m-d', strtotime($pieces[0]))) . ' s/d ' . tgl_aja(date('Y-m-d', strtotime($pieces[1]))) }}</b></small></p>
                </td>
            </tr>
            @else
            @endif
        </table>
        <hr/>
    </div>

        <!--  -->
        <style type="text/css">
            .barang {
                font-size: 12px;
                margin-bottom: 15px
            }
            table.barang td, table.barang th {
                padding: 2px 5px;
            }
        </style>


        <table class="table border barang">
            <thead>
                <tr>
                    <th align="center">No </th>
                    <th align="center">Acara</th>
                    <th align="center">Tanggal Acara</th>
                    <th align="center">Member</th>
                    <th align="center">Lokasi</th>
                    <th align="center">Biaya</th>
                    <th align="center">Waktu</th>
                </tr>
            </thead>
            <tbody id="tables">

            @if(request()->has('waktu'))
                @foreach($filter as $i => $temp_filter)
                <tr>
                    <td>{{++$i}}</td>
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
                @foreach($data as $y => $temp)
                <tr>
                    <td>{{++$y}}</td>
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
        <div class="normal-padding" style="padding: 0 1cm">
        <table class="no-border" width="100%">
            <tr>
                <td width="30%">

                </td>
                <td width="70%" align="right">
                    <small>
                    <small>
                        <div id="company-reg-number">Dicetak Oleh: <b>{{ auth()->user()->name }}</b></div>
                        <div id="company-reg-number">Pada Tanggal: <b>{{ date('d F Y H:i:s') }}</b></div>
                    </small>
                    </small>
                </td>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>