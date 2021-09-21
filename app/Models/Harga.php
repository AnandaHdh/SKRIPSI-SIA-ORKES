<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tempat;

class Harga extends Model
{
    use  HasFactory;

    protected $table = 'harga';
    protected $guarded = [];

    public function lokasi()
    {
        return $this->belongsTo(Tempat::class, 'harga_id', 'id');
    }
}
