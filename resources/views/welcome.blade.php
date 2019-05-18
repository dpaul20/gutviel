@extends('layout.app')
@section('title')
    {{ config('app.name') }}
@endsection
@section('content')	
<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide oferta" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            @for ($i = 1; $i < 7; $i++)
                <div class="carousel-item col-md-3 @php
                {{ echo $retVal = ($i == 1) ? 'active' : '' ;}}
            @endphp">
                   <div class="panel panel-default">
                      <div class="panel-thumbnail">
                        <a href="#" title="image {{ $i }}" class="thumb">
                          <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text={{ $i }}" alt="slide {{ $i }}">
                        </a>
                      </div>
                    </div>
                </div>
            @endfor
            
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection