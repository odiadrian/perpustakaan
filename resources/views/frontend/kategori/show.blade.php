@extends('frontend.app')

@section('content')
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Hasil Pencarian dari "Biografi"</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
						<h4 class="widget-header">Semua Kategori</h4>
						<ul class="category-list">
							@foreach($allCategorys as $category)
							<li><a href="category.html">{{ $category->nama }} <span>93</span></a></li>
							@endforeach						
						</ul>
					</div>

				</div>
			</div>
			<div class="col-md-9">

				<div class="product-grid-list">
					<div class="row mt-30">
						@foreach($buku as $book)
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/ahmad dahlan.jpg') }}" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">K.H. AHMAD DAHLAN</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>Biografi</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">K.H. Ahmad Dahlan: Biografi Singkat 1868-1923</p>
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
						@endforeach
					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection