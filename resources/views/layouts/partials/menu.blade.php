<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm" >
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <i class="fa-solid fa-burger fa-2x" style="font-size:1.5em"></i>
      <!-- Logo Text -->
      <span class="font-weight-bold">Bocatería Rafa</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Inicio</a></li>

        <!-- Usuarios autenticados -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administración
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('products.index')}}">Productos</a></li>
              <li><a class="dropdown-item" href="{{route('ingredients.index')}}">Ingredientes</a></li>
              <li><a class="dropdown-item" href="{{route('providers.index')}}">Proveedores</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

      </ul>
    </div>

</div>
</nav>

