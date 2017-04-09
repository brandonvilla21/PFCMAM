@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">

      <h1>Registro de Alumno</h1>

      <form method="POST" action="/alumnos">
        {{ csrf_field() }}

        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del alumno...">
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
          <label for="">Contraeña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese una contraeña..."/>
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
