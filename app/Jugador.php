<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    //
    protected $table ="jugadores";
protected $primaryKey ="idjugador";

public $timestamps = false;

protected $fillable = [
    "idequipo",
    "nombre",
    "apellido",
    "edad"
];

    public function equipos()
    {
        return $this->hasMany(Equipo::class,'idequipo');
    }
}
