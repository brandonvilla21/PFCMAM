@extends('layouts.master')
@section('content')
  <div class="row">

    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <h2>Consulta del alumno {{ $alumno->nombre }}</h2>
      <div class="div_form">
        <div >
          <div class="form-group">
            <label>Nombre</label>
            <input readonly="readonly" type="text" class="form-control" id="nombre" name="nombre" value="{{ $alumno->nombre }}">
          </div>

          <div class="form-group">
            <label for="">Apellido Paterno</label>
            <input readonly="readonly" type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{ $alumno->apellido_paterno }}"/>
          </div>

          <div class="form-group">
            <label for="">Apellido Materno</label>
            <input readonly="readonly" type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{ $alumno->apellido_materno }}"/>
          </div>
          <div class="form-group">
            <a href="/alumnos">
              <span class="btn btn-registrar">Regresar</span>
            </a>

        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
    </div>
  </div>

@endsection
