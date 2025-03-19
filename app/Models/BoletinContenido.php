<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletinContenido extends Model
{
    use HasFactory;

    protected $table = "boletin_contenido";

    public function boletin()
    {
        return $this->belongsTo('App\Models\Boletin', 'boletin_id');
    }

    public function elemento()
    {
        return $this->belongsTo('App\Models\ElementoBoletin', 'elemento_id');
    }

    public function config()
    {
        return $this->belongsTo('App\Models\ConfigGrafico', 'config_graficos_id');
    }
}
