@extends('admin.template.main')

@section('title', 'Listado de imagenes')

@section('content')
<div class="row">
                @foreach($images as $image)
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="/images/articles/{{$image->name}}">
                      <img src="/images/articles/{{$image->name}}" alt="Lights" style="width:100%">
                      <div class="caption">
                      <p>{{$image->article['title']}}</p>
                      </div>
                    </a>
                  </div>
                </div>
                @endforeach   
</div>
@endsection
