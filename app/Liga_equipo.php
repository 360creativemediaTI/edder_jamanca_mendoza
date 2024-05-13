<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga_equipo extends Model
{
    protected $table ="liga_equipo";


    public $timestamps = false;

    protected $primaryKey ="idligaequipo";

    protected $fillable = [
        "idliga",
        "idequipo",
    ];

    
}
