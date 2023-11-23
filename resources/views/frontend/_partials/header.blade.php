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
								<a class="nav-link" href="">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route ('frontend.tentang') }}">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Kategori</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="dashboard.html">Semua Buku</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Kontak</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">

							<li class="nav-item">
								<a class="nav-link add-button" href="{{ route('login') }}"><i class="fa fa-plus-circle"></i> Login</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>