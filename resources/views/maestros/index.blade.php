@extends('layouts.master')

@section('content')

  <div class="row">
    <div class="col-lg-2"></div>

    <div class="col-lg-8 jumbotron">
      <h2>Registro de maestros</h2>

      <div class="table-responsive">
        <table class="table table-hover table-responsive">
          <tbody class="font-small">

            <th>ID</th>
            <th>Nombre</th>
            <th>Appellidos</th>
            <th>Numero Celular</th>
            <th>Correo</th>
            <th>Dado de alta</th>

            @foreach ($maestros as $maestro)
              <tr>
                <td>{{ $maestro->id_maestro }}</td>
                <td>{{ $maestro->nombre }}</td>
                <td>{{ $maestro->apellido_paterno }} {{ $maestro->apellido_materno }}</td>
                <td>{{ $maestro->numero_celular }}</td>
                <td>{{ $maestro->correo }}</td>
                <td>{{ $maestro->created_at->toFormattedDateString() }}</td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <a href="/maestros/create" class="btn btn-default btn-block">Agregar</a>
    </div>

    <div class="col-lg-2"></div>

  </div>

@endsection
