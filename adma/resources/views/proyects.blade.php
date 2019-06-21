
@extends('template')
@section('title', 'Portafolio')
@section('content')
<section class="section">
    <div class="container">
        <h1 class="text-center display-1 my-5 mb-5">Portfolio</h1>
        <div class="col-md-2 ml-auto mr-auto">
                    
            <div class="row">
                <div class="nav-align-center">
                    <nav aria-label="Page navigation example" class="mb-2 ">
                        {!! $proyects->render() !!}
                    </nav>
                </div>
            </div>
        </div>

        <div class="tab-content gallery mt-5" id="actions">
            <div class="tab-pane active" id="galeria">
                <div class="card-columns" id="gallery">
                    @foreach($proyects as $proyect)
                        <div class="card card-pin">
                            <a href="#" data-toggle="modal" data-target="{{$proyect->id}}">
                                <img src="{{asset('img/portfolio')}}/{{$proyect->images[0]->nombre}}" alt="{{$proyect->nombre}}" class="card-img-top" >
                                <div class="overlay">
                                    <h3 class="card-title title">{{$proyect->nombre}}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
{{-- <a href = "{{route('allProyects/')}}" >Detalle</a> --}}