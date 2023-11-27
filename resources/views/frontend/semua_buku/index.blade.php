@extends('frontend.app')
@section('title', 'SemuaBuku')
@section('content')

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
                    @foreach($kategori as $kate)
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="category-block">
                                <div class="header">
                                    <i class="fa fa-laptop icon-bg-1"></i>
                                    <a href="{{ route('frontend.show.kategori', $kate->slug) }}">
                                        <h4>Biografi </h4>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- /Category List -->
                    @endforeach
             
                </div>
            </div>
        </div>
    </div>
	<!-- Container End -->
</section>
@endsection