@extends('template')
@section('title', 'Detalle')
@section('content')
<section class="ftco-services section-lg " >
  <div class="container">
    <div class="row no-gutters" >
      <div class="col-md-6 ftco-animate p-4 p-md-5 d-flex align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            @for($i = 0; $i < count($proyect->images); $i++)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i === 0) active @endif"></li>
            @endfor
          </ol>
          <div class="carousel-inner">
            @foreach ($proyect->images as $key => $image)
            <div class="carousel-item @if($key === 0) active @endif">
            <img class="d-block w-100" src="{{asset('img/portfolio')}}/{{$image->nombre}}" alt="$proyect->nombre">
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-6 ftco-animate p-4 p-md-5 align-items-center">
        <h1 class="display-2">{{$proyect->nombre}}</h1>
      <p class="display3">{{$proyect->creado->format('d-m-Y')}} - @if($proyect->status === 1) Diseño @elseif($proyect->status === 2) Construccion @elseif($proyect->status === 3)  Terminado @endif - {{$proyect->category->nombre}}</p>
      <p class="display4">{{$proyect->descripcion}}</p>
      </div>
    </div>
  </div>
</section>

@endsection