<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Default')| Panel administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/Trumbowyg/ui/trumbowyg.css')}}">

</head>
<body>
    @include('admin.template.partials.nav')
    <section>
      <div class="panel panel-default">
       <div class="panel-heading">
       <br>
           <h3 class="panel-titlle">@yield('title')</h3>
       </div>
        <div class="panel-body">
        @include('flash::message')
        @include('admin.template.partials.errors')
        @yield('content')
        </div>
       </div>
    </section>
    <footer>
    </footer>
    <script  src = "{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"> </script>
    <script>window.jQuery || document.write('<script src = "{{ asset('plugins/Trumbowyg/trumbowyg.minjs') }}"><\/script>')</script>
     
    <script  src = "{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script  src = "{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script  src = "{{ asset('plugins/Trumbowyg/trumbowyg.js') }}"></script>
    
    @yield('js');
</body>
</html>