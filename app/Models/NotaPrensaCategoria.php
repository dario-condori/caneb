<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaPrensaCategoria extends Model
{
    use HasFactory;

    protected $table = "notas_prensa_categoria";

    public function notasPrensa()
    {
        return $this->hasMany('App\Models\NotaPrensa', 'categoria_id');
    }
}
