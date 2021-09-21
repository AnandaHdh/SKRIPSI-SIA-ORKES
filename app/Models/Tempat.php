<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Harga;
use App\Models\Sewa;

class Tempat extends Model
{
    use  HasFactory;

    protected $table = 'alamat';
    protected $guarded = [];

    public function harga()
    {
        return $this->belongsTo(Harga::class, 'harga_id', 'id');
    }

    public function sewa()
    {
        return $this->belongsTo(Tempat::class, 'alamat_id', 'id');
    }

}
