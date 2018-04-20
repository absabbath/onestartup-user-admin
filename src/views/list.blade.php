@extends('layouts.admin.admin-layout')
@section('content')

<div class='row collapse' id='xxx'>
  <div class='col-md-10 offset-1'>
    <div class='box'>
      <div class='box-header dark'>
        <h2>
          Nuevo usuario
          <span>
            <a aria-expanded='false' data-toggle='collapse' href='#xxx' class="btn btn-xs danger">
                Cancelar
              </a>
          </span>
        </h2>
      </div>
      <div class='box-body'>
        <div class="row">
          <div class="col-md-8 offset-2">
            {!! Form::open(['route'=> ['user.store'],"method"=>"POST"]) !!}
            @include('user-admin::fields')
            {!! Form::label('password', 'Password', ['class'=>'control-label']) !!}
            {!! Form::text('password', null, ["class"=>"form-control", "id"=>"password", "required"=>"required"]) !!}

            <br>
            {!! Form::submit('Registrar', ['class'=>'btn btn-block btn-primary']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class='col-md-10 offset-1'>
    <div class='box'>
      <div class='box-header dark'>
        <h2>
          Listado de usuarios
          <span>
            <a aria-expanded='false' data-toggle='collapse' href='#xxx' class="btn btn-xs primary">
                Agregar usuarios
            </a>
          </span>
        </h2>
      </div>
      <div class='box-body'>
        <table class='table' id="users">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Bio</th>
              <th>Tipo</th>
              <th>Fecha de creación</th>
              <th></th>
            </tr>
          </thead>
        </table>
      </div>
      <div class='dker p-a text-right'></div>
    </div>
  </div>
</div>
@endsection


@push('scripts')
<script>
  $(function() {
    $('#users').DataTable({
      processing: true,
      serverSide: true,
      pageLength: 25,
      ajax: '{{ route("user.datatable") }}',
      columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'short_bio', name: 'short_bio'},
            {data: 'rol_id', name: 'rol_id'},
            {data: 'created_at', name: 'created_at'},
            {data: 'details_url', name: 'details_url'},
        ]
    });

  });
</script>
@endpush
