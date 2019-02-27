@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
<div class="container">
<a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><br><br>
<!--- Buscador de tags-->
      {!! Form::open(['route' =>'tags.index', 'method' =>'GET', 'class' => 'navbar-form pull-right col-md-2']) !!}
          <div class = "form-group">
          {!! Form::text('name', null, ['class' =>'form-control', 'placelhoder' =>'Buscar tag ..'])!!}
          </div>
      {!! Form::close() !!}
<!-- Fin de buscador-->
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Acción</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
              @if($user->type == "admin")
              <span style="color:blue;font-weight:bold">{{$user->type}}</span>
              @else
              <span style="color:red;font-weight:bold">{{$user->type}}</span>
              @endif
        </td>
            <td>
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">
                   <span class="glyphicon"> &#x270f;</span> 
                </a>
                <a href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-danger btn-sm">
                <span class="glyphicon">&#xe020;</span>
                </a>
          </td>
      </tr>
    @endforeach
    
  </tbody>
</table>
<div>
{!!  $users->links('pagination::bootstrap-4')!!}
</div>
</div>
@endsection