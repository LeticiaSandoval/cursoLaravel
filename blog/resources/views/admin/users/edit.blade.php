@extends('admin.template.main')

@section('title', 'Editar usuario '.$user->name)

<div class="container">
<br>
@section('content')
  {!! Form::open(['route' =>['users.update',$user->id], 'method' =>'PUT']) !!}

  <div class="form-group">
   {!! Form::label('name', 'Nombre')!!}
   {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('email', 'Correo')!!}
   {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('type', 'Typo')!!}
   {!! Form::select('type', [''=>'Seleccione un nivel','member' => 'Miembro', 'admin'=>'Administrador'],  ['class' => 'form-control'])!!}
  </div>

  <div class="form-group">
  {!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}

  </div>

{!! Form::close() !!}
</div>

@endsection

