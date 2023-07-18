<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <img src="{{asset('portal/images/caneb/caneb.png')}}" width="190px" alt="CANEB"/>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="{{ route('portal.inicio') }}">Inicio</a></li>
                <li class=""><a href="{{ route('portal.acerca') }}">CANEB</a></li>
                <li class="dropdown"><a class="dropdown-toggle" href="{{ route('portal.servicios') }}" data-toggle="dropdown">Servicios</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portal.servicios') }}#exportaciones">Exportaciones</a></li>
                        <li><a href="{{ route('portal.servicios') }}#logistica">Logística</a></li>
                        <li><a href="{{ route('portal.servicios') }}#inversiones">Inversiones</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Actividades</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portal.eventos') }}#eventos">Eventos</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Noticias</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portal.notasPrensa')}}">Notas de prensa</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Información</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portal.guia_export') }}">Guía de Exportaciones</a></li>
                        {{--<li><a href="{{ route('portal.estadisticas') }}">Estadísticas</a></li>--}}
                        <li><a href="{{ route('portal.direc_export') }}">Directorio de empresas</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Publicaciones</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('portal.anuarios') }}">Anuario</a></li>
                        {{--<li><a href="about1.html">Boletines</a></li>--}}
                    </ul>
                </li>
                <li class=""><a href="#contacto">Contactanos</a></li>
            </ul>
        </div>
    </div>
</nav>