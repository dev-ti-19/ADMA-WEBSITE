@extends('template')
@section('title', 'Home')
@section('content')
    <section class="section bg-secondary">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-6">
                    <div class="card bg-default shadow border-0">
                        <img class="img-fluid" src="{{asset('img/history.jpg')}}" alt="worck">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-5">
                        <h3>Historia</h3>
                        <p class="lead">Despacho de Ingenieros Arquitectos que comienza de la formación profesional, partiendo de la preocupación que generan los fenómenos arquitectónicos que aquejan a la sociedad mexicana y extranjera, buscando las alternativas y soluciones mas optimas para resolver las necesidades del humano y del entorno, encontrando el equilibrio entre la sostenibilidad, rentabilidad y vanguardia.</p>
                    <a href="{{route('allProyects')}}" class="btn btn-default">Portafolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <h2 class="display-3 text-center">
            Destacados
        </h2>
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-6">
                    <p>SEPTIEMBRE 2017 - CONCLUIDO - INTERVENCIÓN URBANO ARQUITECTÓNICA</p>
                    <div class="thumbnail">
                        <img src="{{asset('img/portfolio/destacados/RENDER PERRON 01.jpg')}}" alt="CHOCOLIN 03" class="img-responsive image-item">
                        <div class="caption">
                            <h3 class="display-3 text-darker"><strong>CHOCOLIN 03</strong></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-5">
                        <p class="lead">Chocolin 03 es un proyecto que atiende a las necesidades generales y particulares de comerciantes y usuarios de la zona pirotécnica, potencializando urbanísticamente el entorno, respetando el medio físico, sin pasar por alto la seguridad que este exige.</p>
                    </div>
                </div>
            </div>
            <div class="row row-grid align-items-center">
                <div class="col-md-6">
                    <div class="pl-md-5">
                        <p class="lead">El reto de concebir arquitectura minimalista contemporánea en una construcción de más de 30 años de antigüedad, cuidando minuciosamente la estructura existente para no afectar la misma sin perder el sentido vanguardista del diseño.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>OCTUBRE 2018 - CONCLUIDO – CASA HABITACION</p>
                    <div class="thumbnail">
                    <img src="{{asset('img/portfolio/destacados/R4.jpg')}}" alt="ATENCO 12" class="img-responsive image-item">
                        <div class="caption">
                            <h3 class="display-3 text-darker"><strong>ATENCO 12</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection