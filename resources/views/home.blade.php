@extends('layouts.app')

@section('contenedor')
<div class="col-md-3">
    <div class="row novedades">
        <div class="col-md-12">
            <div class="card">
                <div class="tituloOrange ">
                    <h5 class="card-title">
                        TÍTULO
                    </h5>
                </div>
                
                <img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
                <div class="card-block">
                    <p class="card-text">
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <p>
                        <a class="btn" href="#">Ver más...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="tituloOrange ">
                    <h5 class="card-title">
                        TÍTULO
                    </h5>
                </div>
                <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
                <div class="card-block">
                    <p class="card-text">
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <p>
                        <a class="btn" href="#">Ver más...</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 paginacion">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previo</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>       
    </div>
    
</div>
<div class="col-md-6">
    <div class="row">
        <div class="col-md-12">
            {{-- crousel --}}
            <div class="row">
                <div class="col-md-8">
                    <h5>SOLO POR HOY</h5>
                </div>
                <div class="col-md-4">
                    VER +
                </div>
            </div>
            <div id="gallery" style="display:none;">
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=1" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=2" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=3" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=4" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=5" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=6" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=7" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=8" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
            </div>
            {{-- fin carousel --}}
        </div>
    </div>
    <div class="row carousel2">
        <div class="col-md-12 ">
            {{-- crousel --}}
            <div class="row">
                <div class="col-md-8">
                    <h5>SOLO POR HOY</h5>
                </div>
                <div class="col-md-4">
                    VER +
                </div>
            </div>
            <div id="gallery2" style="display:none;">
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=1" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=2" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=3" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=4" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=5" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=6" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=7" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
                <a href="">
                    <img alt="Lemon Slice" src="//via.placeholder.com/600x400?text=8" data-image="//via.placeholder.com/600x400?text=1" data-description="This is a Lemon Slice" style="display:none">
                </a>
            </div>
            {{-- fin carousel --}}
        </div>
    </div>
    
</div>
<div class="col-md-3">
    <div class="tituloOrange ">
        <h5>BUSCAR PRODUCTO</h5>
    </div>
    
    <form role="form">
        <div class="input-group mb-3">
            <select class="custom-select" aria-describedby="basicSelect">
                <option selected>Buscar por...</option>
                <option value="1">Código producto</option>
                <option value="2">Nombre producto</option>
                <option value="2">Marca</option>
                <option value="3">Linea</option>
            </select>
            <div class="input-group-append">
                <span class="input-group-text" id="basicSelect">
                    <img src="{{ asset('/img/angle-right-solid.svg') }}">
                </span>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="basicSearch">
            <div class="input-group-append">
                <span class="input-group-text" id="basicSearch">
                    <img src="{{ asset('/img/Icono_buscar.png') }}">
                </span>
            </div>
        </div>
    </form>
</div>
@endsection
