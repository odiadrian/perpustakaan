@extends('frontend.app')

@section('content')

<body>
    <div class="col-12">
        <!-- Section title -->
        <div class="section-title">
            <h2>Semua Kategori</h2>
            <p>Cari Produk, Judul Buku, Penulis yang ada di Perpustakaan. Ayo Pilih yang kamu inginkan!</p>
        </div>
        <div class="row">
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-laptop icon-bg-1"></i>
                        <a href="{{ route('frontend.show.kategori', $kategori->slug) }}">
                            <h4>Biografi </h4>
                        </a>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-apple icon-bg-2"></i>
                        <a href="category.html">
                            <h4>Buku Cerita Anak</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-home icon-bg-3"></i>
                        <a href="category.html">
                            <h4>Fantasi</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-shopping-basket icon-bg-4"></i>
                        <a href="category.html">
                            <h4>Sastra</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-briefcase icon-bg-5"></i>
                        <a href="category.html">
                            <h4>Romantis</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-car icon-bg-6"></i>
                        <a href="category.html">
                            <h4>Bisnis dan Ekonomi</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-paw icon-bg-7"></i>
                        <a href="category.html">
                            <h4>Psikologi</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-laptop icon-bg-8"></i>
                        <a href="category.html">
                            <h4>Pengembangan Diri</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->


            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-briefcase icon-bg-5"></i>
                        <a href="category.html">
                            <h4>Misteri</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-car icon-bg-6"></i>
                        <a href="category.html">
                            <h4>Humor</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-paw icon-bg-7"></i>
                        <a href="category.html">
                            <h4>Komik dan Novel</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                <div class="category-block">
                    <div class="header">
                        <i class="fa fa-laptop icon-bg-8"></i>
                        <a href="category.html">
                            <h4>Makanan dan Minuman</h4>
                    </div>
                </div>
            </div> <!-- /Category List -->
        </div>

    </div>
</body>
@endsection