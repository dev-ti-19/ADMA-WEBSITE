@extends('template')
@section('title', 'Detalle')
@section('content')
<section class="ftco-services section-lg " >
  <div class="container">
    <div class="row no-gutters" >
      <div class="col-md-6 ftco-animate p-4 p-md-5 d-flex align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('img/portfolio/perfil2.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('img/portfolio/perfil2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('img/portfolio/perfil2.jpg')}}" alt="Third slide">
            </div>
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
        Libero sit reiciendis. Molestias aliquid pariatur dolores exercitationem architecto et. Molestiae maxime omnis sunt aliquid non et. Consequuntur porro temporibus repellat eos illo.
      </div>
    </div>
  </div>
</section>

@endsection