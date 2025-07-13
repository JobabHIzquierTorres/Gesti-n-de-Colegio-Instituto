  
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3" href="/home">InstApp</a>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
  </form>
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider" /></li>
            <li><a {{--class="nav-link"--}} class="btn_register" href="{{ route('register') }}">Registrar usuario</a></li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">Cerrar Sesión</button>
              </form>
          </li>
        </ul>
    </li>
</ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Estudiantes</div>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Sección Alumnos
                </a>
                <div class="sb-sidenav-menu-heading">Profesores</div>
                <a class="nav-link" href="{{ route('home-profesores') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Sección Profesores
                </a>
                <div class="sb-sidenav-menu-heading">Cursos</div>
                <a class="nav-link" href="{{ route('home-cursos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Sección Cursos
                </a>
                <div class="sb-sidenav-menu-heading">Matrículas</div>
                <a class="nav-link" href="{{ route('home-matriculas') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Sección Matrículas
                </a>
                <div class="sb-sidenav-menu-heading">Calificaciones</div>
                <a class="nav-link" href="{{ route('home-calificaciones') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Sección Notas
                </a>
                <div class="sb-sidenav-menu-heading">Cursos y Profesores</div>
                <a class="nav-link" href="{{ route('cursos-profesores') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Sección Cursos y sus Profesores
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Sesión iniciada como:</div>
            {{ Auth::user()->name  }}
        </div>
    </nav>
</div>