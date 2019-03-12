@extends('admin.template.main')

@section('title', 'Listado de imagenes')

@section('content')
<div class="container">
    <div class="col-md-2">
            @foreach($images as $image)
            <div class="col-md-2">
                    <div class="panel panel-default">
                            <div class="panel-body"> <img src="/images/articles/{{$image->name}}" class="img-reponsive"></div>
                    <div class="panel-footer">{{$image->article->title}}</div> 
                    </div>
            </div>      
    </div>
    
</div> 
@endsection