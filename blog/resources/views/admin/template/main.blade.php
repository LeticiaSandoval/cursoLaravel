<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Default')| Panel administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
    @include('admin.template.pantials.nav')
    <section>
        @yield('content')
    </section>
    <script  src = "{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}">  
    <script  src = "{{ asset('plugins/bootstrap/js/bootstrap.js') }}">
</body>
</html>