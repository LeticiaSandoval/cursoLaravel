@extends('admin.template.main')

@section('title', 'Agregar categoría')

@section('content')

<div class="container">
<br>  
   {!! Form::open(['route' => 'tags.store', 'method' => 'POST'])!!}
      <div class="form-group">
           {!! Form::label('name', 'Nombre') !!}
           {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
      </div>
      <div class="form-group">
           {!! Form::submit ('Agregar',['class' =>'btn btn-primary'])!!}
      </div>

   {!! Form::close() !!}
</div>
@endsection