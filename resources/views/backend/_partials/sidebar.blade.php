<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Perpustakaan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/backend/img/' . auth()->user()->image) }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name}}</h6>
                <span>{{ auth()->user()->username}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('backend.home')}}" class="nav-item nav-link {{ (request()->is('home*')) ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Dashboard</a>
            <a href="{{route('backend.kategori')}}" class="nav-item nav-link {{ (request()->is('kategori*')) ? 'active' : '' }}"><i class="fa fa-book-open me-2"></i>Kategori Buku</a>
            <a href="{{ route('backend.buku')}}" class="nav-item nav-link {{ (request()->is('buku*')) ? 'active' : '' }}"><i class="fa fa-book me-2"></i>Buku</a>
            <a href="{{ route('backend.penulis')}}" class="nav-item nav-link {{ (request()->is('penulis*')) ? 'active' : '' }}"><i class="fa fa-pen me-2"></i>Penulis</a>
            <a href="{{route('backend-index-Peminjam')}}" class="nav-item nav-link {{ (request()->is('peminjam*')) ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Peminjam</a>
            <a href="{{route('backend-index-transaksi')}}" class="nav-item nav-link {{ (request()->is('transaksi*')) ? 'active' : '' }}"><i class="fa fa-user-friends me-2"></i>Peminjaman</a>
            <a href="{{route('backend-index-pesan')}}" class="nav-item nav-link {{ (request()->is('pesan*')) ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Data Pesan</a>
            <a href="{{route('backend-index-konfigurasi')}}" class="nav-item nav-link {{ (request()->is('konfigurasi*')) ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Konfigurasi</a>
            <a href="{{route('backend-index-user')}}" class="nav-item nav-link {{ (request()->is('user*')) ? 'active' : '' }}"><i class="fa fa-user me-2"></i>User</a>
        </div>
</div>
</nav>
</div>
<!-- Sidebar End -->