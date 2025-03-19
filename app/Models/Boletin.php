<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletin extends Model
{
    use HasFactory;

    protected $table = "boletines";

    public function categoria()
    {
        return $this->belongsTo('App\Models\BoletinCategoria', 'categoria_id');
    }

    public function esquema()
    {
        return $this->belongsTo('App\Models\BoletinEsquema', 'esquema_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Models\BoletinEstado', 'estado_id');
    }

    public function contenido()
    {
        return $this->hasMany('App\Models\BoletinContenido', 'boletin_id');
    }
}
