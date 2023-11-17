@extends('frontend.app')

@section('content')
<section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<article class="single-post">
					<h3>WELCOME TO THE LIBRARY .</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">Admin</a></li>
						<li class="list-inline-item">Nov 17, 2023</li>
					</ul>
					<img src="{{ url ('assets/frontend/images/perpus.jpg') }}" alt="article-01">
					<p>Gramedia.com adalah toko buku online terbesar dan terlengkap di Indonesia yang menyediakan aneka buku berkualitas, alat tulis hingga perlengkapan kantor lainnya.

						Sejak tahun 2009 Gramedia membangun toko online. Toko ini merupakan bagian dari Toko Gramedia Matraman.
						.</p>

					<p>ada tahun 2016 hingga saat ini, Gramedia.com dikelola oleh PT. Gramedia Asri Media. Kini Gramedia.com telah terintegrasi dengan lebih dari 100 cabang toko Gramedia se-Indonesia. Para pelanggan dapat berbelanja dan melakukan pembelian dari Gramedia terdekat di kota Anda. Dan pengiriman pun dapat dilakukan dari seluruh toko Gramedia se-Indonesia.

						Misi kami adalah meningkatkan literasi dan memberikan kemudahan akses pada dunia pengetahuan di seluruh Indonesia dengan memanfaatkan teknologi.</p>

					<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<ul class="social-circle-icons list-inline">
						<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
					</ul>
				</article>
				<div class="block comment">
					<h4>Leave A Comment</h4>
					<form action="#">
						<!-- Message -->
						<div class="form-group mb-30">
							<label for="message">Message</label>
							<textarea class="form-control" id="message" rows="8"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<!-- Name -->
								<div class="form-group mb-30">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name">
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<!-- Email -->
								<div class="form-group mb-30">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email">
								</div>
							</div>
						</div>
						<button class="btn btn-transparent">Leave Comment</button>
					</form>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
							<input type="text" class="form-control" id="expire" placeholder="Search...">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
						</div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list">
							<li><a href="">Appearel <span class="float-right">(2)</span></a></li>
							<li><a href="">Accesories <span class="float-right">(5)</span></a></li>
							<li><a href="">Business<span class="float-right">(7)</span></a></li>
							<li><a href="">Entertaiment<span class="float-right">(3)</span></a></li>
							<li><a href="">Education<span class="float-right">(9)</span></a></li>
						</ul>
					</div>
					<!-- Store Widget -->
					<div class="widget related-store">
						<!-- Widget Header -->
						<h5 class="widget-header">Related Store</h5>
						<ul class="store-list md list-inline">
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-02.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-03.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-04.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-05.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-06.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="images/popular-offer/populer-offer-07.png" alt="store-image"></a>
							</li>
						</ul>
					</div>
					<!-- Archive Widget -->
					<div class="widget archive">
						<!-- Widget Header -->
						<h5 class="widget-header">Archives</h5>
						<ul class="archive-list">
							<li><a href="">January 2017</a></li>
							<li><a href="">February 2017</a></li>
							<li><a href="">March 2017</a></li>
							<li><a href="">April 2017</a></li>
							<li><a href="">May 2017</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection