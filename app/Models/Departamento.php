<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = "departamentos";

    public function empresasExports()
    {
        return $this->hasMany('App\Models\EmpresaExport', 'depto_id');
    }

    public function empresasLogisticas()
    {
        return $this->hasMany('App\Models\EmpresaLogistica', 'depto_id');
    }
}
