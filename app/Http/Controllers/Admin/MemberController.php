<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Sewa;
use DataTables;
use Redirect;
use Storage;
use File;
use Image;
use Str;

class MemberController extends Controller
{
    public function __construct(Member $member, Sewa $sewa)
    {
        $this->member = $member;
        $this->sewa = $sewa;
    }

    public function index(Request $request)
    {
        $data = $this->member->latest()->get();
        if($request->has('datatable')):
            return $this->datatable($data);
        endif;
        return View('epanel.admin.member.index');
    }

    public function create()
    {
        return View('epanel.admin.member.create');
    }

    public function store(Request $request)
    {
        $data = new $this->member;
        $data['name'] = $request->name;
        $data['alamat'] = $request->alamat;
        $data['nomor_hp'] = $request->nomor_hp;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['plain'] = $request->password;
        $data->save();
        return redirect()->route('member.index');
    }

    public function edit($id)
    {
        $data = $this->member->find($id);
        return View('epanel.admin.member.edit', compact('data'));
    }



    public function hapus($id)
    {
        $kenalin = $id;
        $cek = $this->sewa->whereHas('member', function ($q) use ($kenalin){
            $q->where('member_id', $kenalin);
        })->first();
        if(empty($cek)){
            $data = $this->member->find($id);
            $data->delete();
            return redirect()->route('member.index');
        } else {
            return redirect()->back()->with(['error' => 'Maaf Data Tersebut Tidak Bisa Dihapus Karna Berelasi Dengan Data Booking yang Ada']);
        }
    }


    public function update(Request $request, $id)
    {
        $data = $this->member->find($id);
        $data['name'] = $request->name;
        $data['alamat'] = $request->alamat;
        $data['nomor_hp'] = $request->nomor_hp;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['plain'] = $request->password;
        $data->save();
        return redirect()->route('member.index');
    }

    public function loginForm()
    {
        if (auth()->guard('member')->check())
        return redirect()->intended(route('member.awal'));
        return View('epanel.member.login');
    }

    public function login(Request $request)
    {
        $auth = $request->only('email', 'password');
        if (auth()->guard('member')->attempt($auth)) {
            return redirect()->intended(route('member.awal'));
        }
        return redirect()->back()->with(['error' => 'Email / Password Salah']);
    }

    public function register(Request $request)
    {
        $data = new $this->member;
        $data['name'] = $request->name;
        $data['alamat'] = $request->alamat;
        $data['nomor_hp'] = $request->nomor_hp;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['plain'] = $request->password;
        $data->save();
        return redirect()->back()->with(['success' => 'Berhasil Daftar']);
    }

    public function dashboard(Request $request)
    {
        $data = $this->sewa->where('status', '!=', 0)->get();
        if($request->has('datatable')):
            return $this->datatable2($data);
        endif;
        return View('epanel.member.jadwal.index', compact('data'));
    }

    public function logout()
    {
        auth()->guard('member')->logout();
        return redirect(route('admin.login'));
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
        ->rawColumns(['acara','tgl_acara','member','tempat', 'harga', 'waktu'])->make(true);
    }

    protected function datatable($data)
    {
        return Datatables::of($data)
        ->editColumn('nama', function($data) {
            $return  = $data->name;
            return $return;
        })
        ->editColumn('alamat', function($data) {
            $return  = $data->alamat;
            return $return;
        })
        ->editColumn('nomor_hp', function($data) {
            $return  = $data->nomor_hp;
            return $return;
        })
        ->editColumn('aksi', function($data) {
            $return  = '<div class="btn-toolbar">';
            $return .= '    <div class="btn-group btn-md">';
            $return .= '        <a href="'.route("member.edit", $data->id).'" class="btn btn-md btn-primary">';
            $return .= '            <span class="fa fa-pencil"></span>Edit';
            $return .= '        </a><a class="btn btn-md btn-danger" href="'.route("member.hapus", $data->id).'" data-id="'.$data->id.'">';
            $return .= '        Hapus</a>';
            $return .= '    </div>';
            $return .= '</div>';
            return $return;
        })
        ->rawColumns(['nama','alamat', 'nomor_hp','aksi'])->make(true);

    }

}
