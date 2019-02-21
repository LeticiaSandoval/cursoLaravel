<nav>
<div class="container-fluid">
<div class=""> 
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link"  href="{{ route('users.index') }}" aria-haspopup="true" >Usuarios</a>
   
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Artículos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Imagenes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tags</a>
  </li>
</ul>

<ul class = "navbar-nav navbar-right">
 <li><a href = "#" >Pagina principal</a></li>
 <li class = "dropdown"><a>{{ }} <span class="caret"></span></a></li>

</ul>
</div>
</div>
</nav>