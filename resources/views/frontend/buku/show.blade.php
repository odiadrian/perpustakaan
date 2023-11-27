@extends('frontend.app')

@section('content')
    <!-- Section for Novel Religi -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="img-box">
                    <img class="card-img-top img-fluid img-medium" src="{{ url('assets/frontend/images/buku1.jpg') }}" alt="" data-category="religi" width="50px" height="150px" >
                </div>
            </div>
            <div class="col-md-9">
                <div class="detail-box bg-light p-4">
                    <div class="heading_container mb-4">
                        <h2 class="text-primary">
                            Detail Buku
                        </h2>
                    </div>
                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ route('detailbuku.show', ['category' => 'religi']) }}" class="text-primary">Novel Religi</a></h4>

                            <!-- Additional Book Details -->
                            <ul class="list-unstyled">
                                <li class="mb-2">Sinopsis: Religi dan falsafat yang berkembang di Indonesia, tentu saja dalam bentuk ikhtisar yang ringkas namun dapat diharapkan diapresiasi oleh pembaca.</li>
                                <li class="mb-2">Penerbit: Nama Penerbit</li>
                                <li class="mb-2">Jumlah Halaman: 300 halaman</li>
                                <li class="mb-2">Tanggal Terbit: 01 Januari 2023</li>
                                <li class="mb-2">ISBN: 1234567890</li>
                                <li class="mb-2">Bahasa: Bahasa Indonesia</li>
                            </ul>

                            <div class="product-ratings mt-4">
                                <ul class="list-inline">
                                    <!-- Additional details if needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link add-button btn btn-primary mt-3" href="#">
                        Baca
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Section -->
    @section('scripts')
        @parent
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
