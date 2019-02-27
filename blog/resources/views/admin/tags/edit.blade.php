@extends('admin.template.main')

@section('title', 'Editar tag') 

@section('content')

<div class="container">
<br>  
   {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT'])!!}
      <div class="form-group">
           {!! Form::label('name', 'Nombre') !!}
           {!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
      </div>
      <div class="form-group">
           {!! Form::submit ('Editar',['class' =>'btn btn-primary'])!!}
      </div>

   {!! Form::close() !!}
</div>
@endsection