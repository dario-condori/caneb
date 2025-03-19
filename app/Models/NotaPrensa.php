<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaPrensa extends Model
{
    use HasFactory;

    protected $table = "notas_prensa";

    public function categoria()
    {
        return $this->belongsTo('App\Models\NotaPrensaCategoria', 'categoria_id');
    }
}
