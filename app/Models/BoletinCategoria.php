<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletinCategoria extends Model
{
    use HasFactory;

    protected $table = "boletin_categoria";

    public function boletines()
    {
        return $this->hasMany('App\Models\Boletin', 'categoria_id');
    }
}
