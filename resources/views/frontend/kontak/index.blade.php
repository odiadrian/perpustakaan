@extends('frontend.app')
@section('title', 'Kontak')
@section('content')


<section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<article class="single-post">
					@if(Session::has('message'))
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h5>
							<i class="icon fas fa-check"></i> Sukses!
						</h5>
						{{ Session('message')}}
					</div>
					@endif

					<h3>YOU CAN CALL ME !</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">pustaka</a></li>
					</ul>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2180018139234!2d105.29336527380741!3d-5.383703253829823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dac03d097843%3A0x6bb59f4ba9a84e8c!2sPT%20Microdata%20Indonesia%20%7C%20Software%20Developer%20%7C%20IT%20Consultant!5e0!3m2!1sid!2sid!4v1700207910220!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					<ul class="social-circle-icons list-inline mt-3">
						<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
						<li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
					</ul>
				</article>
				<div class="block comment">
					<h4>Tinggalkan Pesan</h4>
					<form action="{{route('frontend.pesan')}}" method="post">
						@csrf
						<!-- Message -->
						<div class="form-group mb-30">
							<label for="message">Pesan</label>
							<textarea class="form-control" name="message" id="message" rows="8"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<!-- Name -->
								<div class="form-group mb-30">
									<label for="name">Nama Lengkap</label>
									<input type="text" name="name" class="form-control" id="name">
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<!-- Email -->
								<div class="form-group mb-30">
									<label for="email">Email Aktif</label>
									<input type="email" name="email" class="form-control" id="email">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-transparent">Silahkan Pesan</button>
					</form>
				</div>
			</div>

			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">

						</div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Email</h5>
						<ul class="category-list">
							<li><a href="">Pustaka@gmail900.com <span class="float-right"></span></a></li>

						</ul>
					</div>
					<!-- Store Widget -->
					<div class="widget related-store">
						<!-- Widget Header -->
						<h5 class="widget-header"> No Telepon</h5>
						<ul class="store-list md list-inline">
							<ul class="category-list">
								<li><a href="">0857 6789 0934 <span class="float-right"></span></a></li>
								</li>
							</ul>
					</div>
					<!-- Archive Widget -->
					<div class="widget archive">
						<!-- Widget Header -->
						<h5 class="widget-header">Alamat</h5>
						<ul class="archive-list">
							<li><a href="">Jl. Endro Suratmin No.52d, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35131</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ***** Featured Games End ***** -->
@endsection