@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8 jumbotron">
    <h2>Registro de alumnos</h2>
    <div class="table-responsive">
      <table class="table table-hover table-responsive">
        <tbody class="font-small">

          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Dado de alta</th>
          <th>Modificado</th>
          <th></th>
          @foreach ($alumnos as $alumno)
            <tr>
              <th scope ="row">{{ $alumno->id_alumno }}</th>
              <td>{{ $alumno->nombre }}</td>
              <td>{{ $alumno->apellido_paterno }}</td>
              <td>{{ $alumno->apellido_materno }}</td>
              <td>{{ $alumno->created_at->toFormattedDateString() }}</td>
              <td>{{ $alumno->updated_at->toFormattedDateString() }}</td>
              <td><a href="/alumnos/{{ $alumno->id_alumno }}">Consultar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    <a href="/alumnos/create" class="btn btn-default btn-block">Agregar</a>
  </div>
  <div class="col-lg-2"></div>
</div>

@endsection
