<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table ="equipos";
    protected $primaryKey ="idequipo";

    public $timestamps = false;

    protected $fillable = [
        "nombre"
    ];

    public function jugadores()
    {
        return $this->belongsTo(Jugador::class, 'idequipo');
    }
}
