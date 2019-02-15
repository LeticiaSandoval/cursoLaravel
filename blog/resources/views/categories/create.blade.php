@extends('admin.template.main')

@section('title', 'Agregar categoria')

@section('content')
  
   {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST'])!!}

   {!! Form::close()!!}

@endsection