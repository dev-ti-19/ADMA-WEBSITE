@extends('template')
@section('title', 'About')
@section('content')
    <section class="ftco-services section-lg " >
        <div class="container">
          <div class="row no-gutters" >
            <div class="col-md-5 py-5 nav-link-wrap ftco-animate " style="background-color: black;" >
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                  <h3 class="ml-3"> Our services</h3>
                <a class="nav-link px-4 active" style="background-color: black;" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="fa fa-facebook-square  btn-lg "></span> Service 1</a>

                <a class="nav-link px-4 " style="background-color: black;" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="fa fa-facebook-square  btn-lg "></span> Service 2</a>

                <a class="nav-link px-4 "style="background-color: black;"  data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="fa fa-facebook-square btn-lg "></span> Service 3</a>

              <a class="nav-link px-4 "style="background-color: black;"  id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="fa fa-facebook-square btn-lg "></span> Service 4</a>

              <a class="nav-link px-4 " style="background-color: black;" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-buffets" role="tab" aria-controls="v-pills-buffets" aria-selected="false"><span class="fa fa-facebook-square  btn-lg "></span> Service 5</a>

              </div>
            </div>
            <div class="col-md-7 ftco-animate p-4 p-md-5 d-flex align-items-center">
              
              <div class="tab-content pl-md-5" id="v-pills-tabContent">

                <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                  <h2 class="mb-4">Service 1</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab molestiae, suscipit sed facere porro quidem ducimus ipsum, consequatur, reprehenderit alias temporibus recusandae vel nisi magni molestias totam ut eos delectus.</p>
                  <p><a href="#" class="btn btn-primary px-4 py-3" style="background-color: black;">Read More</a></p>
                </div>

                <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                  <h2 class="mb-4">Serivce 2</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit voluptas voluptatem similique pariatur! Molestiae facilis corrupti quisquam ipsam molestias placeat quod ea eius ad explicabo, eaque earum voluptatem eos amet quo aspernatur quam cum officiis.</p>
                  <p><a href="#" class="btn btn-primary px-4 py-3"style="background-color: black;">Read More</a></p>
                </div>

                <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                  <h2 class="mb-4">Service 3</h2>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias deserunt praesentium facere modi? Molestias, autem. Molestias voluptatum exercitationem architecto temporibus fugiat, dignissimos dolore, animi suscipit odit rem magni facilis ut quas maxime eius eaque ipsum ipsa quasi tempora. Optio, adipisci illum repellat excepturi debitis odio provident voluptates quaerat nisi aliquam nemo explicabo quibusdam quae consequatur. Modi quia minima obcaecati tempore!</p>
                  <p><a href="#" class="btn btn-primary px-4 py-3"style="background-color: black;">Read More</a></p>
                </div>

                <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                  <h2 class="mb-4">Service 4</h2>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab consequuntur esse sapiente nesciunt provident atque dignissimos eius sequi minima! Beatae ad accusantium repudiandae ducimus optio nulla animi rem ratione.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3"style="background-color: black;">Read More</a></p>
                </div>
                <div class="tab-pane fade py-5" id="v-pills-buffets" role="tabpanel" >
                     <h2 class="mb-4">Serivce 5</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit voluptas voluptatem similique pariatur! Molestiae facilis corrupti quisquam ipsam molestias placeat quod ea eius ad explicabo, eaque earum voluptatem eos amet quo aspernatur quam cum officiis.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3"style="background-color: black;">Read More</a></p>
                  </div>
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
              <h2 class="mb-4">How do we do </h2>
            </div>
          </div>
              <div class="row">
                  <div class="col-md-4 ftco-animate">
                      <div class="services">
                          <h3><span>01.</span> Step 1</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem dignissimos quae cum beatae assumenda, nihil dicta. Totam, cumque recusandae?</p>
                      </div>
                  </div>
                  <div class="col-md-4 ftco-animate">
                      <div class="services">
                          <h3><span>02.</span>Step 2</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati iure blanditiis possimus eos autem molestiae!</p>
                      </div>
                  </div>
                  <div class="col-md-4 ftco-animate">
                      <div class="services">
                          <h3><span>03.</span> Step 3</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas consequuntur facere hic odio amet laudantium omnis, nostrum natus.</p>
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
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur rerum maxime velit debitis architecto, ea eos amet dicta voluptates. Debitis nostrum sunt explicabo tempora voluptatem officia incidunt velit quas dicta.
          </p>  
          </div>
        </div>
          <div class="row" >
            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
              <div class="px-4">
              <img src="{{asset('img/portfolio/perfil.jpg')}}"
                  class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                <div class="pt-4 text-center">
                  <h5 class="title">
                    <span class="d-block mb-1">Ale abcd</span>
                    <small class="h6 text-muted">UI/UX Designer</small>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
              <div class="px-4">
                <img src="{{asset('img/portfolio/perfil2.jpg')}}"
                  class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                <div class="pt-4 text-center">
                  <h5 class="title">
                    <span class="d-block mb-1">Adrian Alonso</span>
                    <small class="h6 text-muted">Founder and CEO</small>
                  </h5>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
@endsection