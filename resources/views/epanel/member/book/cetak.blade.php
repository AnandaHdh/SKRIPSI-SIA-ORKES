<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>LAPORAN CASHFLOW </title>

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
    margin: 10px;

}

</style>
</head>
<body>
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
                    <h2 style="margin: 0;"> BUKTI PEMBAYARAN DP </h2>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <p style="margin: 0;"><small>Gg. Sanggam, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75251</small></p>
                </td>
            </tr>
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

            table.oke tr, table.oke td{
                padding: 10px;
            }
        </style>


        <table class="table oke">
                <tr>
                    <td>Acara</td>
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
                    <td>Biaya Acara</td>
                    <td>:</td>
                    <td>Rp. {{ number_format($data->tempat->harga->harga, 2, ',', '.') }}</td>
                </tr>
        </table>

        <br/>


        <style>
             .center {
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                margin-bottom: 100px;
                max-height: 200px;
                }
        </style>
        <img src="{{ $base64 }}" width="100" class="center">

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="normal-padding" style="padding: 0 1cm">
        <table class="no-border" width="100%">
            <tr>
                <td width="30%">

                </td>
                <td width="70%" align="right">
                    <small>
                    <small>
                        <div id="company-reg-number">Dicetak Oleh: <b>{{ auth()->guard('member')->user()->name }}</b></div>
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
