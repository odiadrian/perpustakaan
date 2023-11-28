@extends('frontend.app')

@section('content')
<section class="hero-area bg-1 text-center overly" style="background: url('assets/frontend/images/perpus.jpg');">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Selamat Datang di Perpustakaan </h1>
					<p>Selamat datang di Aplikasi Perpustakaan Terbaru! 
					<br>"Jelajahi dunia literasi dengan sentuhan ujung jari Anda. Temukan keajaiban pengetahuan dan pelajaran yang tak terbatas. Mari bersama-sama membangun budaya membaca yang lebih cemerlang" 
					<br> Selamat menikmati petualangan literasi Anda!</p>
					<div class="short-popular-category-list text-center">					
						<h2>Popular Kategori</h2>
						<ul class="list-inline">
							@foreach($kategori as $kate)
								<li class="list-inline-item">
								<a href="{{ route('frontend.show.kategori', $kate->slug) }}">
								<i class="fa fa-book"></i> {{($kate->nama)}}</a></li>
							@endforeach
						</ul>	
					</div>
					<div class="row">
            		<!-- Category list -->
        		</div>
			</div>
			
				<!-- Advance Search -->
			<div class="advance-search">
				<form action="{{ route('frontend.semuabuku')}}" method="GET">
					<div class="row">
						<!-- Store Search -->
						<div class="col-lg-12 col-md-12">
							<div class="block d-flex">
								<input type="text" name="search" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for book">
								<!-- Search Button -->
								<button type="submit" class="btn btn-main">SEARCH</button>
							</div>
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Semua Buku</h2>
					<!-- <p>123 Results on 12 December, 2017-2022</p> -->
				</div>
			</div>
		</div>
		<div class="row">
        <!-- <div class="row"> -->
			<!-- <div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
						<h4 class="widget-header">Semua Kategori</h4>
						<ul class="category-list">
							@foreach($buku as $book)
							<li><a href="category.html">{{ $book->nama }} <span>93</span></a></li>
							@endforeach						
						</ul>
					</div>
				</div>
			</div> -->
            @foreach($buku as $book)
            <div class="col-sm-12 col-lg-4 col-md-12">
            <!-- product card -->
                <div class="product-item bg-light">
                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="{{ route('frontend.semuabuku')}}">
                                <img class="card-img-top img-fluid" src="{{ url('assets/backend/img/'. $book->image) }}" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="">{{$book->nama_penulis}}</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-folder-open-o"></i>{{$book->nama}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>{{$book->created_at}}</a>
                                </li>
                            </ul>
                            <p class="card-text">{{$book->sinopsis}}</p>
                            <div class="product-ratings">
                                <ul class="list-inline">									
                                    @if ($book->rating >= 90) 
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									@elseif ($book->rating >= 80) 
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									@elseif ($book->rating >= 70) 
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									@elseif ($book->rating >= 60) 
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									@else 
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>             
            </div>
            @endforeach    
                                           
        </div>
    </div>
</section>




<!--==========================================
=            All Category Section            =
===========================================-->

<body>
    <div class="col-12">
        <!-- Section title -->
        <div class="section-title">
            <h2>Semua Kategori</h2>
            <p>Cari Produk, Judul Buku, Penulis yang ada di Perpustakaan. Ayo Pilih yang kamu inginkan!</p>
        </div>
        <div class="row">
            <!-- Category list -->
            @foreach($kategori as $kate)
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-laptop icon-bg-1"></i>
                        <a href="{{ route('frontend.show.kategori', $kate->slug) }}">
                            <h4>{{($kate->nama)}} </h4>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</body>

@endsection