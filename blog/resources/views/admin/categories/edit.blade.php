@extends('admin.template.main')

@section('title', 'Editar categoría '.$category->name)

<div class="container">
<br>
@section('content')
  
   {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT'])!!}
      <div class="form-group">
           {!! Form::label('name', 'Nombre') !!}
           {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required']) !!}
      </div>
      <div class="form-group">
           {!! Form::submit ('Editar',['class' =>'btn btn-primary'])!!}
      </div>

   {!! Form::close() !!}
</div>
@endsection