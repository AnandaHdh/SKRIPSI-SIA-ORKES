<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\User;
use App\Models\Member;
use DataTables;

class SewaController extends Controller
{
    public function __construct(Sewa $sewa)
    {
        $this->middleware('auth');
        $this->sewa = $sewa;
    }

    public function index_baru(Request $request)
    {
        $data = $this->sewa->where('status', 0)->get();
        if($request->has('datatable')):
            return $this->datatable($data);
        endif;
        return View('epanel.admin.book.new-order', compact('data'));
    }

    public function index_utang(Request $request)
    {
        $data = $this->sewa->where('status', 1)->get();
        if($request->has('datatable')):
            return $this->datatable3($data);
        endif;
        return view('epanel.admin.book.new-invoice', compact('data'));
    }

    public function index_terbayar(Request $request)
    {
        $data = $this->sewa->where('status', 2)->get();
        if($request->has('datatable')):
            return $this->datatable2($data);
        endif;
        return View('epanel.admin.book.order-pay', compact('data'));
    }

    public function index_end(Request $request)
    {
        $data = $this->sewa->where('status', 3)->get();
        if($request->has('datatable')){
            return $this->datatable2($data);
        }
        return view('epanel.admin.book.order-end', compact('data'));
    }

    public function veririkasi(Request $request, $id)
    {
        $data = $this->sewa->find($id);
        $data->status = 2;
        $data->save();
        return response()->json(['success' => true]);
    }

    public function tolak($id)
    {
        $data = $this->sewa->find($id);
        $data->status = 4;
        $data->save();
        return response()->json(['success' => true]);
    }

    public function end($id)
    {
        $data = $this->sewa->find($id);
        $data->status = 3;
        $data->save();
        return response()->json(['success' => true]);
    }

    public function detail($id)
    {
        $data = $this->sewa->find($id);
        return View('epanel.admin.book.detail', compact('data'));
    }

    public function ubah_status(Request $request, $id)
    {
        $data = $this->sewa->where('id', $id)->update(
            [
                'status' => 1,
            ]
        );
        return response()->json(['success' => true]);
    }

    protected function datatable($data)
    {
        return Datatables::of($data)
        ->editColumn('acara', function($data) {
            $return  = $data->acara;
            return $return;
        })
        ->editColumn('tgl_acara', function($data) {
            $return  = date('d F Y', strtotime($data->tgl_acara));
            return $return;
        })
        ->editColumn('member', function($data){
            $return = $data->member->name;
            return $return;
        })
        ->editColumn('tempat', function($data){
            $return = $data->tempat->daerah;
            return $return;
        })
        ->editColumn('harga', function($data){
            $return = 'Rp '. number_format($data->tempat->harga->harga, 2, '.', ',');
            return $return;
        })
        ->editColumn('waktu', function($data){
            $return = $data->tempat->harga->waktu;
            return $return;
        })
        ->editColumn('masuk', function($data){
            $return = date('d F Y', strtotime($data->created_at));
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("book-new.show", $data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Detail';
            $return .= '        </a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['acara','tgl_acara','member','tempat', 'harga', 'waktu', 'masuk', 'aksi'])->make(true);
    }

    protected function datatable2($data)
    {
        return Datatables::of($data)
        ->editColumn('acara', function($data) {
            $return  = $data->acara;
            return $return;
        })
        ->editColumn('tgl_acara', function($data) {
            $return  = date('d F Y', strtotime($data->tgl_acara));
            return $return;
        })
        ->editColumn('member', function($data){
            $return = $data->member->name;
            return $return;
        })
        ->editColumn('tempat', function($data){
            $return = $data->tempat->daerah;
            return $return;
        })
        ->editColumn('harga', function($data){
            $return = 'Rp '. number_format($data->tempat->harga->harga, 2, '.', ',');
            return $return;
        })
        ->editColumn('waktu', function($data){
            $return = $data->tempat->harga->waktu;
            return $return;
        })
        ->editColumn('masuk', function($data){
            $return = date('d F Y', strtotime($data->created_at));
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("book-new.show", $data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Detail';
            $return .= '        </a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['acara','tgl_acara','member','tempat', 'harga', 'waktu', 'masuk', 'aksi'])->make(true);
    }

    protected function datatable3($data)
    {
        return Datatables::of($data)
        ->editColumn('acara', function($data) {
            $return  = $data->acara;
            return $return;
        })
        ->editColumn('tgl_acara', function($data) {
            $return  = date('d F Y', strtotime($data->tgl_acara));
            return $return;
        })
        ->editColumn('member', function($data){
            $return = $data->member->name;
            return $return;
        })
        ->editColumn('tempat', function($data){
            $return = $data->tempat->daerah;
            return $return;
        })
        ->editColumn('harga', function($data){
            $return = 'Rp '. number_format($data->tempat->harga->harga, 2, '.', ',');
            return $return;
        })
        ->editColumn('waktu', function($data){
            $return = $data->tempat->harga->waktu;
            return $return;
        })
        ->editColumn('statusku', function($data){
            if(empty($data->struk)){
                $return =  'Belum Bayar !';
            } else {
                $return = '<span class="btn btn-md btn-info">Menunggu Verifikasi</span>';
            }
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("book-new.show", $data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Detail';
            $return .= '        </a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['acara','tgl_acara','member','tempat', 'harga', 'waktu', 'statusku', 'aksi'])->make(true);
    }
}
