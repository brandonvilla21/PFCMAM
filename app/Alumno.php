<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /*
    * Esto significa que podra almacenar cualquier
    * campo desde el formulario, si no esuviera esta
    * asignacion, laravel no permitiria llevar a cabo
    * el registro desde el formulario.
    */
    protected $guarded = [];

    /*
    * Por default, laravel asume que tu llave primaria es'id'
    * por lo tanto habra conflictos con las conultas a la DB
    * es por eso que se asigna el valor 'id_alumno' a la
    * vairable $primaryKey.
    */
    protected $primaryKey = 'id_alumno';
}
