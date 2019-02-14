@extends('admin.template.main')

@section('title', 'Lista de usuarios')
<br>
<div class="container">
@section('content')
<a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><br><br>
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
          <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
      </tr>
    @endforeach
  </tbody>
</table>
<div>
{!!  $users->links('pagination::bootstrap-4')!!}
</div>
</div>
@endsection