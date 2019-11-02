@extends('layouts.app')

@section('contenedor')
<div id="rg-contenedor">

    <div id="contentIzquierda">
        <div class=" novedades">
            <div class="rg-tarjeta">
                <div class="card">
                    <div class="tituloOrange ">
                        <h5 class="card-title">TÍTULO</h5>
                    </div>
                    <div class="centrar-imagen">
                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="{{ url('/img/temporales/novedad.png') }}" />
                    </div>

                    <div class="card-block">
                        <p class="card-text">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ."
                        </p>
                        <p>
                            <a class="btn ver-mas" href="#">Ver más...</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="rg-tarjeta">
                <div class="card">
                    <div class="tituloOrange ">
                        <h5 class="card-title">TÍTULO</h5>
                    </div>
                    <div class="centrar-imagen">
                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="{{ url('/img/temporales/novedad.png') }}" />
                    </div>
                    <div class="card-block">
                        <p class="card-text">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ."
                        </p>
                        <p>
                            <a class="btn ver-mas" href="#">Ver más...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="paginacion">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>       
    </div>
    <div id="rg-ppal">

        {{-- banner --}}
        <div class="tituloAzul">
            <h5 class="subtitulo">SOLO POR HOY</h5>
            <h5 class="vermas">VER MÁS</h5>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/img/temporales/banner.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/img/temporales/banner.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/img/temporales/banner.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- fin carousel --}}



        {{-- carousel --}}
        <div class="tituloAzul">
            <h5 class="subtitulo">SOLO POR HOY</h5>
            <h5 class="vermas">VER MÁS</h5>
        </div>
        <div id="mixedSlider">
            <div class="MS-content">
                <div class="item">
                    <div class="imgTitle">
                        <h2 class="blogTitle">Producto 1</h2>
                        <img src="{{ asset('/img/temporales/producto.png') }}" alt="" />
                    </div>
                    <div class="btn-comprar">
                        <a href="#">Comprar</a>
                    </div>

                </div>
                <div class="item">
                    <div class="imgTitle">
                        <h2 class="blogTitle">Producto 2</h2>
                        <img src="{{ asset('/img/temporales/producto.png') }}" alt="" />
                    </div>

                    <div class="btn-comprar">
                        <a href="#">Comprar</a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                        <h2 class="blogTitle">Producto 3</h2>
                        <img src="{{ asset('/img/temporales/producto.png') }}" alt="" />
                    </div>

                    <div class="btn-comprar">
                        <a href="#">Comprar</a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                        <h2 class="blogTitle">Producto 4</h2>
                        <img src="{{ asset('/img/temporales/producto.png') }}" alt="" />
                    </div>

                    <div class="btn-comprar">
                        <a href="#">Comprar</a>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                        <h2 class="blogTitle">Producto 5</h2>
                        <img src="{{ asset('/img/temporales/producto.png') }}" alt="" />
                    </div>
                    <div class="btn-comprar">
                        <a href="#">Comprar</a>
                    </div>
                </div>

            </div>
            <div class="MS-controls">
                <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>


        </div>
    </div>

    <div id="contBuscador">
        <div class="buscador">
            <div class="tituloOrange ">
                <h5>BUSCAR PRODUCTO</h5>
            </div>
            <div id="bloodhound">
                <input class="typeahead" type="text" placeholder="Buscar...">
            </div>
        </div>  
    </div>

    
</div>

@endsection
