<?php

namespace App\Http\Controllers;

use App\Maestro;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    public function index()
    {
      $maestros = Maestro::all();

      return view('maestros.index', compact('maestros'));
    }

    public function create()
    {
      return view('maestros.create');
    }

    public function store()
    {
      /*Validar campos*/
      $this->validate(request(), [
        'nombre'            => 'required',
        'apellido_paterno'  => 'required',
        'apellido_materno'  => 'required',
        'numero_telefono'   => 'required',
        'numero_celular'    => 'required',
        'correo'
      ]);

      /*Registrar*/
      Maestro::create([
        'nombre'            => request('nombre'),
        'apellido_paterno'  => request('apellido_paterno'),
        'apellido_materno'  => request('apellido_materno'),
        'numero_telefono'   => request('numero_telefono'),
        'numero_celular'    => request('numero_celular'),
        'correo'            => request('correo')
      ]);

      return redirect('/maestros');
    }
}
