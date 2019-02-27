@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')

<div class="container">
<a href="{{route('tags.create')}}" class="btn btn-info">Registrar nuevo tags</a><br><br>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
      <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td>
                <a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-primary btn-sm">
                   <span class="glyphicon"> &#x270f;</span> 
                </a>
                <a href="{{ route('admin.tags.destroy', $tag->id)}}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-danger btn-sm">
                <span class="glyphicon">&#xe020;</span>
                </a>
          </td>
      </tr>
    @endforeach
    
  </tbody>
</table>
<div class="text-center">
{!!  $tags->links('pagination::bootstrap-4')!!}
</div>
</div>
@endsection