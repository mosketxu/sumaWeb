<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="main-nav">
    <div class="container">
        <a class="navbar-brand " href={{route( 'index')}}>
            <img src="{{ asset('img/logosuma.jpg')}}" height="30" class="d-inline-block" id="sumaLogo" alt="Suma Apoyo Empresarial">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown {{ $homeActivo }}">
                    <a href="#" class="nav-link text-primary dropdown-toggle" data-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu">
                        <a href="{{ route( 'suma', '#queofrecemos-head-section')}}" class="dropdown-item">Qué ofrecemos</a>
                        <a href="{{ route( 'suma', '#financiera-head-section')}}" class="dropdown-item">Área Financiera</a>
                        <a href="{{ route( 'suma', '#contable-head-section')}}" class="dropdown-item">Área Contable</a>
                        <a href="{{ route( 'suma', '#fiscal-head-section')}}" class="dropdown-item">Área Fiscal</a>
                        <a href="{{ route( 'suma', '#mercantil-head-section')}} " class=" dropdown-item ">Área Mercantil</a>
                        <a href="{{ route( 'suma', '#administracion-head-section') }} " class="dropdown-item ">Administración</a>
                        <a href="#consultoria-head-section " class="dropdown-item ">Consultoría - RRHH</a>
                    </div>
                </li>
                <li class="nav-item {{ $equipoActivo }} ">
                    <a href={{ route( 'equipo')}} class="nav-link text-primary ">Equipo</a>
                </li>
                <li class="nav-item {{ $clientesActivo }} ">
                    <a href={{ route( 'clientes')}} class="nav-link text-primary ">Clientes</a>
                </li>
                <li class="nav-item {{ $contactoActivo }} ">
                    <a href={{ route( 'contacto')}} class="nav-link text-primary ">Contacto</a>
                </li>
                <li class="nav-item ">
                    <a href="#definir " class="nav-link text-primary ">English</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
