<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ADMA Arquitectos - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Favicon -->
        <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/argon.css')}}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        {{-- header --}}
        <header class="header-global">
            <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
                <div class="container">
                    <a class="navbar-brand text-dark" href="#">Default Color</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <div class="navbar-collapse-header">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="index.html">
                                        <img src="assets/img/brand/blue.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
            
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                            <a class="nav-link nav-link-icon text-dark" href="{{route('home')}}">
                                    <i class="ni ni-favourite-28"></i>
                                    <span class="nav-link-inner--text">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon text-dark" href="#">
                                    <i class="ni ni-folder-17"></i>
                                    <span class="nav-link-inner--text">Portafolio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link nav-link-icon text-dark" href="{{route('about')}}">
                                    <i class="ni ni-satisfied"></i>
                                    <span class="nav-link-inner--text">About</span>
                                </a>
                            </li>
                        </ul>
            
                    </div>
                </div>
            </nav>
        </header>
        {{-- header --}}

        {{-- main --}}
        <main>
          <section class="section section-lg section-shaped pb-250">
              <div class="shape shape-style-1 shape-default paralax" id="home"></div>
              <div class="container py-lg-md d-flex">
                  <div class="col px-0">
                      <div class="row">
                          <div class="col-lg-6">
                              <h1 class="display-3  text-black">ADMA Arquitectos
                              <span><strong>completed with examples</strong></span>
                              </h1>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
            @yield('content')
        </main>

        {{-- main --}}
        {{-- footer --}}
        <footer class="footer bg-dark text-white">
            <div class="container">
              <div class="row row-grid align-items-center mb-10 ">
                <div class="col-lg-2">
                  <img
                    src="assets/img/portfolio/logo.png"
                    alt="logo"
                    style="width:80px;"
                  />
                </div>
                <div class="col-md-10 align-center  ">
                  <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item m-auto ">
                      Address
                      <p style="width: 185px;">
                        <font size="2"
                          >San Isidro, San Vicente Chicoloapan de Juárez Centro,
                          Chimalhucan, 56370 Chicoloapan de Juárez, Méx.</font
                        >
                      </p>
                    </li>
                    <li class="nav-item m-auto">
                      Telephone
                      <p>55-55-55-55-55</p>
                    </li>
                    <li class="nav-item m-auto">
                      E-mail
                      <p>dev.ti2019@gmail.com</p>
                    </li>
                    <li class="nav-item  m-auto">
                      Social Networks
                      <div class="col">
                        <a
                          target="_blank"
                          href="https://twitter.com/creativetim"
                          class="btn btn-neutral btn-icon-only btn-instagram btn-round btn-lg"
                          data-toggle="tooltip"
                          data-original-title="Follow us"
                        >
                          <i class="fa fa-instagram"></i>
                        </a>
                        <a
                          target="_blank"
                          href="https://www.facebook.com/creativetim"
                          class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg"
                          data-toggle="tooltip"
                          data-original-title="Like us"
                        >
                          <i class="fa fa-facebook-square"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </footer>
        {{-- footer --}}
    
        <!-- Core -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendor/headroom/headroom.min.js')}}"></script>
        <!-- Argon JS -->
        <script src="{{asset('/js/argon.js?v=1.0.1')}}"></script>
    </body>
</html>