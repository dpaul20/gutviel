@extends('layouts.app')

@section('contenedor')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="rg-contenedor">
    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3" id="contentIzquierda">
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
<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ppal">
    <div class="row">
        <div class="col-md-12">
            {{-- banner --}}
            <div class="row tituloAzul">
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
        </div>
    </div>
    <div class="row carousel2">
        <div class="col-md-12 contenedorCarousel">
            {{-- carousel --}}
            <div class="row tituloAzul">
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
  </div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 contBuscador">
    <div class="buscador container">
        <div class="tituloOrange ">
            <h5>BUSCAR PRODUCTO</h5>
        </div>
        <div id="bloodhound">
            <input class="typeahead" type="text" placeholder="Buscar...">
        </div>
        {{-- <form role="form">
            <div class="input-group" id="select-buscador">
                <select class="custom-select" aria-describedby="basicSelect">
                    <option selected>Buscar por...</option>
                    <option value="1">Código producto</option>
                    <option value="2">Nombre producto</option>
                    <option value="2">Marca</option>
                    <option value="3">Linea</option>
                </select>
                <div class="input-group-append">
                    <span class="input-group-text" id="basicSelect">
                        <i class="fas fa-angle-right fa-lg"></i>
                    </span>
                </div>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="basicSearch">
                <div class="input-group-append">
                    <span class="input-group-text" id="basicSearch">
                        <i class="fas fa-search fa-lg"></i>
                    </span>
                </div>
            </div>
        </form> --}}
    </div>  
</div>
</div>

@endsection
