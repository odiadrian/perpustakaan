@extends('front.app')
@section('title', 'Home')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">
      <section>
      <div class="bg-holder overlay" style="background-image:url(assets/img/background-2.jpg);background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contact</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
      
    </section>
        <!-- ***** Featured Games Start ***** -->
        <div class="row">
          <div class="col-lg-8">
            <!-- Page Header Start -->
            <section class="bg-100">
        <div class="container">
          <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Melbourne Office</h5>
                  <p class="mb-0 text-1100"> 121 King Street,<br />Melbourne 1200,<br />Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Sydney Office</h5>
                  <p class="mb-0 text-1100"> 62 Collins Street West,<br />Sydney 3000, <br />Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- Page Header End -->
          <div class="col-lg-4">
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- ***** Featured Games End ***** -->
@endsection