<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $primaryKey ="idliga";

    public $timestamps = false;

    protected $fillable = [
        "nombre",
        "fecha_registro",
        "fecha_termino",
        "cantidad_fechas",
    ];
}
