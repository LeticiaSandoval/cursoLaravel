@extends('admin.template.main')

@section('title', 'Editar artículo')

@section('content')
<div class="container">
<br>
{!! Form::open(['route' => ['articles.update', $article], 'method' =>'PUT']) !!}

  <div class="form-group">
   {!! Form::label('title', 'Título')!!}
   {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del atículo', 'required'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('category_id', 'Categoria')!!}
   {!! Form::select('category_id', $categories, $article->category->id,['class' => 'form-control select-category', 'placeholder' =>'Selecciona una opción', 'required'])!!}
  </div>
  
  <div class="form-group">
   {!! Form::label('content', 'Contenido')!!}
   {!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content', 'placeholder' => 'Contenido'])!!}
  </div>

  <div class="form-group">
   {!! Form::label('tags', 'Tags')!!}
   {!! Form::select('tags[]', $tags, $my_tags,['multiple class' => 'form-control select-tag', 'required'])!!}
  </div> 

  <div class="form-group">
  {!! Form::submit('Editar artículo', ['class' => 'btn btn-primary'])!!}
  </div>

{!! Form::close() !!}
</div>
@endsection

@section('js')
<script>
$(".select-tag").chosen(); 
$(".select-category").chosen({
  placeholder_text_single: 'Seleccione una categoria'
}); 

 $(".textarea-content").trumbowyg();
</script>
@endsection