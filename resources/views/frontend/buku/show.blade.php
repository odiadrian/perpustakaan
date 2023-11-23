@extends('frontend.app')

@section('content')

    <!-- Section for Novel Religi -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="img-box">
                    <img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/buku1.jpg') }}" alt="" data-category="religi">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container mb-6">
                        <h2>
                            Detail Buku
                        </h2>
                    </div>
                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ route('detailbuku.show', ['category' => 'religi']) }}">Novel Religi</a></h4>
                            <p class="card-text">Religi dan falsafat yang berkembang di Indonesia, tentu saja dalam bentuk ikhtisar yang ringkas namun dapat diharapkan diapresiasi oleh pembaca.</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link add-button" href="#">
                        Baca
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section for Novel Horor -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="img-box">
                    <img class="card-img-top img-fluid" src="{{ url('assets/frontend/images/buku3.jpg') }}" alt="" data-category="horor">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container mb-6">
                        <h2>
                            Detail Buku
                        </h2>
                    </div>
                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ route('detailbuku.show', ['category' => 'horor']) }}">Novel Horor</a></h4>
                            <p class="card-text">Film horor Indonesia semakin berkembang sejak beberapa tahun terakhir. Hal ini didukung oleh besarnya peminat film horor dalam negeri sehingga terjadi produksi film besar-besaran.</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link add-button" href="#">
                        Baca
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Section -->
    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.img-box img').on('click', function () {
                    var category = $(this).data('category');
                    window.location.href = "{{ route('detailbuku.show', ['category' => '']) }}/" + category;
                });
            });
        </script>
    @endsection

@endsection
