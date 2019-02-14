@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
<div class="container">
{!! Form::open(['route' => 'users.store', 'method' =>'POST']) !!}

  <div class="form-group">
   {!! Form::label('name', 'Nombre')!!}
   {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('email', 'Correo')!!}
   {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('Password', 'Contraseña')!!}
   {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**************', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('type', 'Typo')!!}
   {!! Form::select('type', [''=>'Seleccione un nivel','member' => 'Miembro', 'admin'=>'Administrador'],  ['class' => 'form-control'])!!}
  </div>

  <div class="form-group">
  {!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}

  </div>

{!! Form::close() !!}
</div>

@endsection

