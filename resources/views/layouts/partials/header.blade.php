<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SISGEC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"
               aria-current="page"
               href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cursos.index')}}">Cursos</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>

<header>
    <h1>Jontonio</h1>
    <nav>
        <ul>
            <li class="{{request()->routeIs('home')?'active':''}}">
                <a href="{{ route('home')}}">Home</a>
            </li>
            {{-- El asterisco para marcar cualquier ruta ami curso --}}
            <li class="{{request()->routeIs('cursos.*')?'active':''}}">
                <a href="{{ route('cursos.index')}}">Cursos</a>
            </li>
            <li class="{{request()->routeIs('nosotros')?'active':''}}">
                <a href="{{ route('nosotros')}}">Nosotros</a>
            </li>
            <li class="{{request()->routeIs('contactanos.index')?'active':''}}">
                <a href="{{ route('contactanos.index')}}">contactanos</a>
            </li>
        </ul>
    </nav>

</header>
