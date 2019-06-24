@extends('template')
@section('title', 'About')
@section('content')
    <section class="ftco-services section-lg " >
        <div class="container">
          <div class="row no-gutters" >
            <div class="col-md-5 py-5 nav-link-wrap ftco-animate " style="background-color: black;" >
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <h3 class="ml-3 text-white"> Nuestros servicios</h3>
                @foreach ($servicios as $key => $servicio)                    <a class="@if($key === 0) active @endif nav-link px-4" style="background-color: black;" id="v-pills-{{str_replace(' ', '', $servicio->nombre)}}-tab" data-toggle="pill" href="#v-pills-{{str_replace(' ', '', $servicio->nombre)}}" role="tab" aria-controls="v-pills-{{str_replace(' ', '', $servicio->nombre)}}" aria-selected="true">° {{$servicio->nombre}}</a>
                @endforeach
              </div>
            </div>
            <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">
                <div class="tab-content pl-md-5" id="v-pills-tabContent">
                  <div class="tab-content pl-md-5" id="v-pills-tabContent">
                    @foreach ($servicios as $key => $servicio)
                    <div class="@if($key === 0) active @endif tab-pane fade show py-5" id="v-pills-{{str_replace(' ', '', $servicio->nombre)}}" role="tabpanel" aria-labelledby="v-pills-{{str_replace(' ', '', $servicio->nombre)}}-tab">                    
                      <h2 class="mb-4">{{$servicio->nombre}}</h2>
                      <p>{{$servicio->descripcion}}</p>
                    </div>
                    @endforeach
                  </div>
                </div>
          </div>
        </div>
    </section>
    <!--What  do we do -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Como lo hacemos</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="services">
                    <h3><span>01.</span> Fundamentos</h3>
                    <p>Visualizacion del cliente</p>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="services">
                    <h3><span>02.</span>Creatividad</h3>
                    <p>Proceso de diseño de acuerdo a las necesidades del cliente</p>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="services">
                    <h3><span>03.</span> Ejecucion</h3>
                    <p>Solucion geometrica y de ingenieria del proyecto</p>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!--About us-->
    <section class="section ftco-section">
      <div cla  ss="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
              <div class="col-md-14 text-center heading-section ftco-animate">
              <h2 class="mb-4 ">About us</h2>
              </div>
            <p class="lead">Somos un taller de arquitectura dedicado al diseño de proyectos funcionales que atiendan las necesidades de nuestros clientes, en conjunto con la sustentabilidad y el diseño vanguardista, preocupados por el medio social y la economía.
          </p>  
          </div>
        </div>
          <div class="row" >
              <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                  <div class="px-4">
                    <img src="{{asset('img/adrian.jpg')}}"
                      class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                    <div class="pt-4 text-center">
                      <h5 class="title">
                        <span class="d-block mb-1">Adrian Alonso</span>
                      </h5>
                    </div>
                  </div>
                </div>
            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
              <div class="px-4">
              <img src="{{asset('img/ale.jpg')}}"
                  class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                <div class="pt-4 text-center">
                  <h5 class="title">
                    <span class="d-block mb-1">Ale abcd</span>
                  </h5>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
@endsection