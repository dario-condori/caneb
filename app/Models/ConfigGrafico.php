<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigGrafico extends Model
{
    use HasFactory;

    protected $table = "config_graficos";

    public function contenido()
    {
        return $this->hasMany('App\Models\BoletinContenido', 'config_graficos_id');
    }
}
