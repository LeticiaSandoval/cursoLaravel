@extends('admin.template.main')

@section('title', 'Crear artículo')

@section('content')
<div class="container">
<br>
{!! Form::open(['route' => 'articles.store', 'method' =>'POST', 'files' =>true]) !!}

  <div class="form-group">
   {!! Form::label('title', 'Título')!!}
   {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del atículo', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('category_id', 'Categoria')!!}
   {!! Form::select('category_id', $categories, null,['class' => 'form-control', 'placeholder' =>'selecciona una opción', 'required'])!!}
  </div>
  
  <div class="form-group">
   {!! Form::label('content', 'Contenido')!!}
   {!! Form::textarea('content', null, ['class' => 'form-control'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('tags', 'Tags')!!}
   {!! Form::select('tags[]', $tags, null,['class' => 'form-control', 'placeholder' =>'selecciona una opción', 'required'])!!}
  </div>  

  <div class="form-group">
   {!! Form::label('image', 'Imagen')!!}
   {!! Form::file('image')!!}
  </div>

  <div class="form-group">
  {!! Form::submit('Agregar artículo', ['class' => 'btn btn-primary'])!!}
  </div>

{!! Form::close() !!}
</div>

@endsection