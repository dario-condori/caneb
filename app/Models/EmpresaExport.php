<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaExport extends Model
{
    use HasFactory;

    protected $table = "empresas_export";

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'depto_id');
    }
}
