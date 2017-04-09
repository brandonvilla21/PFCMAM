@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">

      <h1>Registro de Maestro</h1>

      <form method="POST" action="/maestros">
        {{ csrf_field() }}

        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del maestro...">
        </div>

        <div class="form-group">
          <label for="">Apellido Paterno</label>
          <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno..."/>
        </div>

        <div class="form-group">
          <label for="">Apellido Materno</label>
          <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno..."/>
        </div>

        <div class="form-group">
          <label for="">Correo</label>
          <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@ejemplo.com"/>
        </div>
        <div class="form-group">
          <label for="">Celular</label>
          <input type="text" class="form-control" id="numero_celular" name="numero_celular" placeholder="3412345678"/>
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" placeholder="4123456"/>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-registrar">Registrar</button>
        </div>
      </form>


    @include('layouts.error')

  </div>
  <div class="col-lg-2"></div>
</div>

@endsection
