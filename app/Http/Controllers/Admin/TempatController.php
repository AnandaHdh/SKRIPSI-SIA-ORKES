<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tempat;
use App\Models\Sewa;
use DataTables;

class TempatController extends Controller
{
    public function __construct(Tempat $tempat, Sewa $sewa)
    {
        $this->tempat = $tempat;
        $this->sewa = $sewa;
    }

    public function index(Request $request)
    {
        $data = $this->tempat->with('harga')->get();
        if($request->has('datatable')):
            return $this->datatable($data);
        endif;
        return View('epanel.admin.tempat.index', compact('data'));
    }

    public function create()
    {
        return View('epanel.admin.tempat.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $this->tempat->create($data);
        return redirect()->route('alamat.index');
    }

    public function edit($id)
    {
        $data = $this->tempat->find($id);
        return View('epanel.admin.tempat.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->tempat->where('id', $id)
                ->update($request->except(['_token']));
        return redirect()->route('alamat.index');
    }


    public function hapus($id)
    {
        $kenalin = $id;
        $cek = $this->sewa->whereHas('tempat', function ($q) use ($kenalin){
            $q->where('alamat_id', $kenalin);
        })->first();
        if(empty($cek)){
            $data = $this->alamat->find($id);
            $data->delete();
            return redirect()->route('alamat.index');
        } else {
            return redirect()->back()->with(['error' => 'Maaf Data Tersebut Tidak Bisa Dihapus Karna Berelasi Dengan Data Booking yang Ada']);
        }
    }


    protected function datatable($data)
    {
        return Datatables::of($data)
        ->editColumn('daerah', function($data) {
            $return  = $data->daerah;
            return $return;
        })
        ->editColumn('harga', function($data) {
            $return  = number_format($data->harga->harga,2 , ',', '.') . ' - ' . $data->harga->waktu;
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("alamat.edit", $data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Edit';
            $return .= '        </a><a class="btn btn-md btn-danger" href="'.route("alamat.hapus", $data->id).'" data-id="'.$data->id.'">';
            $return .= '        Hapus</a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['daerah','harga', 'aksi'])->make(true);
    }
}
