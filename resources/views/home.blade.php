@extends('layouts.app')

@section('contenedor')
<div class="col-md-3">
    <div class="row novedades">
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
                <div class="card-block">
                    <h5 class="card-title">
                        Card title
                    </h5>
                    <p class="card-text">
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
                <div class="card-block">
                    <h5 class="card-title">
                        Card title
                    </h5>
                    <p class="card-text">
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
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
    <div class="carousel slide" id="carousel-852039">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#carousel-852039" class="active">
            </li>
            <li data-slide-to="1" data-target="#carousel-852039">
            </li>
            <li data-slide-to="2" data-target="#carousel-852039">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
                <div class="carousel-caption">
                    <h4>
                        First Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                <div class="carousel-caption">
                    <h4>
                        Second Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                <div class="carousel-caption">
                    <h4>
                        Third Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#carousel-852039" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-852039" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
    </div>
    <div class="carousel slide" id="carousel-627933">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#carousel-627933" class="active">
            </li>
            <li data-slide-to="1" data-target="#carousel-627933">
            </li>
            <li data-slide-to="2" data-target="#carousel-627933">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
                <div class="carousel-caption">
                    <h4>
                        First Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                <div class="carousel-caption">
                    <h4>
                        Second Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                <div class="carousel-caption">
                    <h4>
                        Third Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#carousel-627933" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-627933" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
    </div>
</div>
<div class="col-md-3">
    <form role="form">
        <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect02">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Options</label>
            </div>
        </div>
        <div class="form-group">
            <input type="search" class="form-control" id="" placeholder="Buscar..." />
        </div>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
</div>
@endsection
