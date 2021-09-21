<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Sewa;
use App\Models\Tempat;
use Str;
use File;
use Image;
use DataTables;

class AuthController extends Controller
{
    public function __construct(Member $member, Sewa $sewa, Tempat $tempat)
    {
        $this->member = $member;
        $this->sewa = $sewa;
        $this->tempat = $tempat;
    }

    public function login($email, $password, $fcm)
    {
        $cek = $this->member->email($email)->plain($password)->first();
        if($cek){
            $cek->fcm_id = $fcm;
            $cek->save();
            return $cek->name .','. $cek->nomor_hp.','.$cek->email.','.$cek->alamat;
        }  else {
            return 'gagal';
        }
    }

    public function register(Request $request)
    {
        $cek = new $this->member;
        $cek->name = $request->nama;
        $cek->email = $request->email;
        $cek->alamat = $request->alamat;
        $cek->nomor_hp = $request->nomor_hp;
        $cek->password = bcrypt($request->password);
        $cek->plain = $request->password;
        $cek->save();
        return $cek ? 'sukses' : 'gagal';
    }

    public function update_password(Request $request)
    {
        $cek = $this->member->email($request->email)->first();
        $cek->password = bcrypt($request->password);
        $cek->plain = $request->password;
        $cek->save();
        return $cek ? 'sukses' : 'gagal';
    }

    public function update_profil(Request $request)
    {
        $cek = $this->member->email($request->email)->first();
        $cek->name = $request->name;
        $cek->alamat = $request->alamat;
        $cek->nomor_hp = $request->nomor_hp;
        $cek->save();
        return $cek ? 'sukses' : 'gagal';
    }

    public function jadwal()
    {
        $data = $this->sewa->where('status', '!=', 0)->latest()->get();
        $res = array();
        foreach($data as $val){
            array_push($res, array(
                    'id' => $val->id,
                    'acara' => $val->acara,
                    "tanggal" => date('d', strtotime($val->tgl_acara)),
                    "bulan" => date('m', strtotime($val->tgl_acara)),
                    "tahun" => date('Y', strtotime($val->tgl_acara)),
                    'member' => $val->member->name,
                    'alamat' => $val->tempat->daerah,
                    'status' => $val->status
                )
            );
        }
        return $res;
    }

    public function jadwal_ku($email)
    {
        $member = $this->member->email($email)->first();
        $data = $this->sewa->where('member_id', $member->id)->latest()->get();
        $res = array();
        foreach($data as $temp){
            array_push($res, array(
                    'id' => $temp->id,
                    'acara' => $temp->acara,
                    "tanggal" => date('d', strtotime($temp->tgl_acara)),
                    "bulan" => date('m', strtotime($temp->tgl_acara)),
                    "tahun" => date('Y', strtotime($temp->tgl_acara)),
                    'member' => $temp->member->name,
                    'alamat' => $temp->tempat->daerah,
                    'status' => $temp->status
                )
            );
        }

        return $res;
    }

    public function add_jadwal(Request $request, $email)
    {
        $member = $this->member->email($email)->first();
        $data = new $this->sewa;
        $data['member_id'] = $member->id;
        $data['status'] = 0;
        $data['acara'] = $request->acara;
        $data['alamat_id'] = $request->alamat;
        $data['tgl_acara'] = $request->tgl_acara;
        $data->save();
        return $data ? 'sukses' : 'gagal';
    }

    public function detail_jadwal($id)
    {
        $res = array();
        $data = $this->sewa->find($id);
        if($data->struk == null):
        array_push($res, array(
                "acara" => $data->acara,
                "tgl_acara" => $data->tgl_acara,
                "daerah" => $data->tempat->daerah,
                "waktu" => $data->tempat->harga->waktu,
                "biaya" => number_format($data->tempat->harga->harga, 2, ',', '.')
            )
        );
        else:
        array_push($res, array(
                "acara" => $data->acara,
                "tgl_acara" => $data->tgl_acara,
                "daerah" => $data->tempat->daerah,
                "waktu" => $data->tempat->harga->waktu,
                "biaya" => number_format($data->tempat->harga->harga, 2, ',', '.'),
                "struk" => asset($data->struk)

            )
        );
        endif;
        return $res[0];
    }

    public function alamat()
    {
        $data = $this->tempat->latest()->get();
        $res = array();
        foreach($data as $val)
        {
            array_push($res, array(
                    "id" => $val->id,
                    "daerah" => $val->daerah,
                    "biaya" => number_format($val->harga->harga, 2, ',', '.'),
                    "waktu" => $val->harga->waktu

                )
            );
        }
        return $res;
    }

    public function upload_struk(Request $request, $id)
    {
        $data = $this->sewa->where('id', $id)->first();
        $data->struk = $this->upload2($request->struk, Str::random(10));
        $data->status = 2;
        $data->save();
        return $data ? 'sukses' : 'gagal';
    }

    protected function upload2($file, $filename)
    {
        $tmpFilePath = 'app/public/Struk/';
        $tmpFileDate =  date('Y-m') .'/'.date('d').'/';
        $tmpFileName = $filename;
        $tmpFileExt = 'jpg';

        makeStorageImgDirectory($tmpFilePath . $tmpFileDate);

		$nama_file = $tmpFilePath . $tmpFileDate . $tmpFileName;

		Image::make($file->getRealPath())->resize(500, 500)->save(storage_path() . "/$nama_file.$tmpFileExt");
		return "storage/Struk/{$tmpFileDate}{$tmpFileName}.{$tmpFileExt}";
    }
}
