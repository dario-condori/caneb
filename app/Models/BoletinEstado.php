<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletinEstado extends Model
{
    use HasFactory;

    protected $table = "boletin_estado";

    public function boletines()
    {
        return $this->hasMany('App\Models\Boletin', 'estado_id');
    }
}
