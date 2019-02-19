@extends('admin.template.main')

@section('title', 'Listado de categorías')

<div class="container">
<br>
@section('content')
    <a href="{{ route('categories.create')}}" class="btn btn-info">Registrar nueva categoría</a><br><br>
    <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm">
                   <span class="glyphicon"> &#x270f;</span> 
                </a>
                <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-danger btn-sm">
                <span class="glyphicon">&#xe020;</span>
                </a>
          </td>
      </tr>
    @endforeach
    
  </tbody>
</table>
<div class="text-center">
{!!  $categories->links('pagination::bootstrap-4')!!}
</div>
</div>
@endsection