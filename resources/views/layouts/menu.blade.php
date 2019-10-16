 <div class="menu row">
    <div class="col-12 col-xs-12 col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light ">  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="carrito navbar-brand" href="#">
                <img src="{{ asset('/img/cart.png') }}">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <span class="navbar-brand textAzul">
                    Hola, <strong>David</strong>
                </span>
                <a class="navbar-brand textAzul" href="#">Cerrar sesión</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/nosotros') }}">NOSOTROS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/novedades') }}">NOVEDADES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/catalogo') }}">CATÁLOGO</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/contactenos') }}">CONTÁCTENOS</a>
                    </li>
                </ul>
            </div>
            
        </nav>
    </div>
</div>
