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
					<p>"Selamat datang di Aplikasi Perpustakaan Terbaru! <br> Jelajahi dunia literasi dengan sentuhan ujung jari Anda. Temukan keajaiban pengetahuan dan pelajaran yang tak terbatas. Mari bersama-sama membangun budaya membaca yang lebih cemerlang" 
						<br> Selamat menikmati petualangan literasi Anda!</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-bed"></i> Dongeng</a></li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-grav"></i> Olahraga</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-car"></i> Kendaraan</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-cutlery"></i> Makanan</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-coffee"></i> Minuman</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search -->
							
							<div class="col-lg-12 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for book">
									<!-- Search Button -->
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>
				
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

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Buku</h2>
					<p>Kalau kamu masih kebingungan memilih buku untuk dibaca, jangan khawatir... 
					<br>Kami hadir dengan rekomendasi buku-buku Tranding Tahun 2023 yang siap untuk menjadi favorit kamu di tahun ini! 
					<br>Kamu juga bisa terus scroll untuk mendapatkan rekomendasi buku Tranding ditahun sebelumnya, ya!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-sm-12 col-lg-4">
				<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="">
				<img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/buku3.jpg') }}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="">Novel Horor</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-folder-open-o"></i>Buku</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-calendar"></i>15th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">Film horor Indonesia semakin berkembang sejak beberapa tahun terakhir. Hal ini didukung oleh besarnya peminat film horor dalam negeri sehingga terjadi produksi film besar-besaran.</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



			</div>
			<div class="col-sm-12 col-lg-4">
				<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="">
				<img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/buku1.jpg') }}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="">Novel Religi</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-folder-open-o"></i>Buku</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-calendar"></i>15th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">Religi dan falsafat yang berkembang di Indonesia, tentu saja dalam bentuk ikhtisar yang ringkas namun dapat di harapkan di apresiasikan oleh pembaca." </p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



			</div>
			<div class="col-sm-12 col-lg-4">
				<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="">
				<img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/buku4.jpg') }}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="">Novel Cinta</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-folder-open-o"></i>Buku</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href=""><i class="fa fa-calendar"></i>15th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cinta adalah suatu emosi dari afeksi yang kuat dan ketertarikan pribadi. Cinta juga dapat diartikan sebagai suatu perasaan dalam diri seseorang akibat faktor pembentuknya.</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



			</div>
			
			
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Semua Kategori</h2>
					<p>Terdapat 12 subkategori seluruhnya dalam kategori ini.</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i> 
								<h4>Electronics</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Laptops <span>93</span></a></li>
								<li><a href="category.html">Iphone <span>233</span></a></li>
								<li><a href="category.html">Microsoft  <span>183</span></a></li>
								<li><a href="category.html">Monitors <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-apple icon-bg-2"></i> 
								<h4>Restaurants</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cafe <span>393</span></a></li>
								<li><a href="category.html">Fast food <span>23</span></a></li>
								<li><a href="category.html">Restaurants  <span>13</span></a></li>
								<li><a href="category.html">Food Track<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i> 
								<h4>Real Estate</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Farms <span>93</span></a></li>
								<li><a href="category.html">Gym <span>23</span></a></li>
								<li><a href="category.html">Hospitals  <span>83</span></a></li>
								<li><a href="category.html">Parolurs <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-4"></i> 
								<h4>Shoppings</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Mens Wears <span>53</span></a></li>
								<li><a href="category.html">Accessories <span>212</span></a></li>
								<li><a href="category.html">Kids Wears <span>133</span></a></li>
								<li><a href="category.html">It & Software <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-briefcase icon-bg-5"></i> 
								<h4>Jobs</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">It Jobs <span>93</span></a></li>
								<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
								<li><a href="category.html">Management  <span>183</span></a></li>
								<li><a href="category.html">Voluntary Works <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i> 
								<h4>Vehicles</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Bus <span>193</span></a></li>
								<li><a href="category.html">Cars <span>23</span></a></li>
								<li><a href="category.html">Motobike  <span>33</span></a></li>
								<li><a href="category.html">Rent a car <span>73</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-paw icon-bg-7"></i> 
								<h4>Pets</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cats <span>65</span></a></li>
								<li><a href="category.html">Dogs <span>23</span></a></li>
								<li><a href="category.html">Birds  <span>113</span></a></li>
								<li><a href="category.html">Others <span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-8"></i> 
								<h4>Services</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cleaning <span>93</span></a></li>
								<li><a href="category.html">Car Washing <span>233</span></a></li>
								<li><a href="category.html">Clothing  <span>183</span></a></li>
								<li><a href="category.html">Business <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

@endsection