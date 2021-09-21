<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Harga;
use App\Models\Sewa;
use DataTables;
use PDF;

class LaporanController extends Controller
{

    public function __construct(Sewa $sewa)
    {
        $this->sewa = $sewa;
    }

    public function index(Request $request)
    {
        $data = $this->sewa->latest()->get();
        if($request->has('purpose')):
            if($request->purpose == 'cetak'):
                // return view('epanel.admin.laporan.cetak', compact('data'));
                $pdf = PDF::LoadView('epanel.admin.laporan.cetak', compact('data'));
                return $pdf->stream();
            endif;
        endif;
        return view('epanel.admin.laporan.index', compact('data'));
    }
}