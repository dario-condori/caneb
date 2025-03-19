<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementoBoletin extends Model
{
    use HasFactory;

    protected $table = "elemento_boletin";

    public function boletinContenido()
    {
        return $this->hasMany('App\Models\BoletinContenido', 'elemento_id');
    }
}
