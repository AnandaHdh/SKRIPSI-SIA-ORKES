<?php

namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sewa;
use DataTables;
use Image;
use Str;
use PDF;

class SewaController extends Controller
{
    public function __construct(Sewa $sewa)
    {
        $this->sewa = $sewa;
    }

    public function awalan()
    {
        return view('landing');
    }

    public function index(Request $request)
    {
        $this->middleware('auth');
        $data = $this->sewa->where('member_id', auth()->guard('member')->user()->id)->get();
        if($request->has('datatable')):
            return $this->datatable($data);
        endif;
        return View('epanel.member.book.index', compact('data'));
    }

    public function create()
    {
        return View('epanel.member.book.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['member_id'] = auth()->guard('member')->user()->id;
        $data['status'] = 0;
        $this->sewa->create($data);
        return redirect()->route('member-sewa.index');
    }

    public function edit($id)
    {
        $data = $this->sewa->find($id);
        return View('epanel.member.book.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        $data['member_id'] = auth()->guard('member')->user()->id;
        $data['status'] = 0;
        $this->sewa->where('id', $id)
                ->update($data);
        return redirect()->route('member-sewa.index');
    }

    public function upload_struk(Request $request, $id)
    {
        $data = $this->sewa->find($id);
        return view('epanel.member.book.upload', compact('data'));
    }

    public function post_struk(Request $request, $id)
    {
        $data = $this->sewa->find($id);
        if($request->hasFile('struk')):
            $data['struk'] = $this->upload2($request->file('struk'), Str::random(10));
        endif;
        $data->status = 2;
        $data->save();
        return redirect()->route('member-sewa.index');
    }

    public function cetak($id)
    {
        set_time_limit(300);
        $data = $this->sewa->find($id);
        $data_image = file_get_contents($data->struk);
        $type = pathinfo($data_image, PATHINFO_EXTENSION);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data_image);
        $pdf = PDF::loadView('epanel.member.book.cetak', compact('data', 'base64'));
        return $pdf->stream();
    }

    protected function upload2($file, $filename)
    {
        $tmpFilePath = 'app/public/Struk/';
        $tmpFileDate =  date('Y-m') .'/'.date('d').'/';
        $tmpFileName = $filename;
        $tmpFileExt = $file->getClientOriginalExtension();

        makeStorageImgDirectory($tmpFilePath . $tmpFileDate);

		$nama_file = $tmpFilePath . $tmpFileDate . $tmpFileName;

		Image::make($file->getRealPath())->resize(500, 500)->save(storage_path() . "/$nama_file.$tmpFileExt");
		return "storage/Struk/{$tmpFileDate}{$tmpFileName}.{$tmpFileExt}";
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
        ->editColumn('status', function($data){
            if($data->status == 0):
                $return = '<code>Requested</code>';
            elseif($data->status == 1):
                if(empty($data->struk)){
                    $return = '<code>Lakukan Pembayaran</code>';
                } else {
                    $return = '<code>Menunggu Verifikasi Pembayaran</code>';
                }
            elseif($data->status == 2):
                $return = '<code>Berhasil</code>';
            elseif($data->status == 3):
                $return = '<code>Selesai</code>';
            else:
                $return = '<code>DiTolak</code>';
            endif;
            return $return;
        })
        ->editColumn('aksi', function($data) {
            if($data->status == 0):
                $return  = '<div class="btn-toolbar">';
                $return .= '    <div class="btn-group btn-md">';
                $return .= '        <a href="'.route("member.hapus", $data->id).'" class="btn btn-md btn-primary">';
                $return .= '            <span class="fa fa-pencil"></span>Hapus';
                $return .= '        </a><a class="btn btn-md btn-danger" id="delete" data-id="'.$data->id.'">';
                $return .= '        Hapus</a>';
                $return .= '    </div>';
                $return .= '</div>';
                return $return;

            elseif($data->status == 1):
                $return  = '<div class="btn-toolbar">';
                $return .= '    <div class="btn-group btn-md">';
                $return .= '        <a href="'.route("member-sewa.upload", $data->id).'" class="btn btn-md btn-primary">';
                $return .= '            <span class="fa fa-pencil"></span>Upload Struk';
                $return .= '        </a>';
                $return .= '    </div>';
                $return .= '</div>';
                return $return;

            elseif($data->status == 2):
                $return  = '<div class="btn-toolbar">';
                $return .= '    <div class="btn-group btn-md">';
                $return .= '        <a href="'.route("member.cetak", $data->id).'" class="btn btn-md btn-warning">';
                $return .= '            <span class="fa fa-pencil"></span>Cetak Bukti !';
                $return .= '        </a>';
                $return .= '    </div>';
                $return .= '</div>';
                return $return;
            else:
                
            endif;
        })
        ->rawColumns(['acara','tgl_acara','tempat', 'harga', 'waktu','status', 'aksi'])->make(true);
    }

}
