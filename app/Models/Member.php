<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Member extends Authenticatable
{
    use Notifiable;

    protected $guard_name = 'admin';

    protected $table = 'member';

    public function scopeUuid($query, $string)
    {
        return $query->whereUuid($string)->first();
    }

    public function scopeEmail($query, $string)
    {
        return $query->whereEmail($string);
    }

    public function scopePlain($query, $string)
    {
        return $query->wherePlain($string);
    }
}
