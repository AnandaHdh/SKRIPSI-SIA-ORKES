<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tempat;
use App\Models\Member;


class Sewa extends Model
{
    use  HasFactory;

    protected $table = 'sewa';
    protected $guarded = [];

    public function tempat()
    {
        return $this->belongsTo(Tempat::class, 'alamat_id', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

}
