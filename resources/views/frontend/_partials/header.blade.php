@extends('frontend.app')
@section('style')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('title', 'Beranda')
@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="index.html">
						<img src="{{ url('assets/frontend/images/logo-eperpus.png') }}" alt="" style="width: 180px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.home') }}">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.tentang') }}">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.kategori') }}">Kategori</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.semuabuku')}}">Semua Buku</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.kontak') }}">Kontak</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">

							<li class="nav-item">
								<a class="nav-link add-button" href="{{route ('login') }}"><i class="fa fa-plus-circle"></i> Login</a>
							</li>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Daftar
						</button>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="text-center">
						<h4 id="exampleModalLabel">Silahkan Login</h4>
						<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
						<!-- <p class="text-center">Login</p> -->
						<p><strong>Masukkan Username, Email dan Password Anda untuk mengakses panel Diagnosa.</strong></p>
					</div>
					
					<form action="#" class="pl-2 pr-2">
						<div class="form-group mb-3">
							<label for="name">Username </label>
							<input class="form-control" type="name" id="name"
								required="" placeholder="Masukan Username Anda">
						</div>
						<div class="form-group mb-3">
							<label for="email">Email </label>
							<input class="form-control" type="email" id="email"
								required="" placeholder="Masukan Email Anda">
						</div>
						<div class="form-group mb-3">
							<label for="password1">Password</label>
							<input class="form-control" type="password" required=""
								id="password1" placeholder="Masukan Password Anda">
						</div>
						<div class="form-group mb-3">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input"
									id="customCheck2">
								<label class="custom-control-label"
									for="customCheck2">Remember me</label>
							</div>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-rounded btn-primary" type="submit">Daftar</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
