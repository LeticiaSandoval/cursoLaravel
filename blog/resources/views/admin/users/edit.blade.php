@extends('admin.template.main')

@section('title', 'Editar usuario '.$user->name)

@section('content')

<div class="container">
<br>
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
   {!! Form::select('type', ['member' => 'Miembro', 'admin'=>'Administrador'], $user->type,  ['class' => 'form-control'])!!}
  </div>

  <div class="form-group">
  {!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}

  </div>

{!! Form::close() !!}
</div>

@endsection

