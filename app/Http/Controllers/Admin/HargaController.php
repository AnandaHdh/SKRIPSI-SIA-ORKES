<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Harga;
use App\Models\Sewa;
use App\Models\Tempat;
use DataTables;

class HargaController extends Controller
{
    public function __construct(Harga $harga, Sewa $sewa, Tempat $tempat)
    {
        $this->harga = $harga;
        $this->sewa = $sewa;
        $this->tempat = $tempat;
    }

    public function index(Request $request)
    {
        $data = $this->harga->latest()->get();
        if($request->has('datatable')):
            return $this->datatable($data);
        endif;
        return View('epanel.admin.harga.index', compact('data'));
    }

    public function create()
    {
        return View('epanel.admin.harga.create');
    }

    public function store(Request $request)
    {
        $data =  $request->all();
        $this->harga->create($data);
        return redirect()->route('harga.index');
    }

    public function edit($id)
    {
        $data = $this->harga->find($id);
        return view('epanel.admin.harga.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        $this->harga->where('id', $id)->update($data);
        return redirect()->route('harga.index');
    }

    public function hapus($id)
    {
        $kenalin = $id;
        $cek = $this->sewa->whereHas('tempat', function ($q) use ($kenalin){
            $q->where('harga_id', $kenalin);
        })->first();
        if(empty($cek)){
            $data = $this->harga->find($id);
            $data->delete();
            return redirect()->route('harga.index');
        } else {
            return redirect()->back()->with(['error' => 'Maaf Data Tersebut Tidak Bisa Dihapus Karna Berelasi Dengan Data Booking yang Ada']);
        }
    }

    protected function datatable($data)
    {
        return Datatables::of($data)
        ->editColumn('harga', function($data) {
            $return  = number_format($data->harga, 2, ',', '.');
            return $return;
        })
        ->editColumn('waktu', function($data) {
            $return  = $data->waktu;
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("harga.edit",$data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Edit';
            $return .= '        </a><a class="btn btn-md btn-danger" href="'.route("harga.hapus", $data->id).'" data-id="'.$data->id.'">';
            $return .= '        Hapus</a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['harga','waktu', 'aksi'])->make(true);
    }

}
