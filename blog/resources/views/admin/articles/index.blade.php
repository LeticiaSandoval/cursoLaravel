@extends('admin.template.main')

@section('title', 'Listado de artículos')

@section('content')
<div class="container">
<a href="{{route('articles.create')}}" class="btn btn-info">Registrar nuevo artículo</a><br><br>

<!--- Buscador de tags-->

{!! Form::open(['route' => 'articles.index', 'method' =>'GET', 'class' => 'd-flex flex-row-reverse bd-highlight'])!!}

      <div class="form-group">
           {!! Form::submit ('Buscar',['class' =>'btn btn-outline-success my-2 my-sm-0'])!!}
      </div>
      <div class="form-group">
           {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo ..', 'required']) !!}
      </div>
   {!! Form::close() !!}<br>
<!-- Fin de buscador-->

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Categoria</th>
      <th scope="col">User</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
      @foreach($articles as $article)
      <tr>
          <td>{{ $article->id }}</td>
          <td>{{ $article->title }}</td>
          <td>{{ $article->category->name }}</td>
          <td>{{ $article->user->name }}</td>
          <td>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-sm">
                   <span class="glyphicon"> &#x270f;</span> 
                </a>
                <a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-danger btn-sm">
                <span class="glyphicon">&#xe020;</span>
                </a>
          </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div> {!!  $articles->links('pagination::bootstrap-4')!!}</div>
</div>
@endsection