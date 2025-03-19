<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletinEsquema extends Model
{
    use HasFactory;

    protected $table = "boletin_esquema";

    public function boletines()
    {
        return $this->hasMany('App\Models\Boletin', 'esquema_id');
    }
}
