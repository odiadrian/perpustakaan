@extends('frontend.app')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"><strong>Daftar Table Pinjaman</strong></h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered no-wrap mt-4">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Buku</th>
                                    <th class="text-center">Telat Pengembalian</th>
                                    <th class="text-center">Denda</th>
                                    <th class="text-center">Dipinjam Pada</th>
                                    <!-- <th class="text-center">Aksi</th> -->
                                </tr>
                            </thead>
                       
                        <tbody>
                        @forelse($detail_transaksi as $detail_trans)
                        <tr>
                            <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                            <td class="text-center">{{ $detail_transaksi->firstItem() + $loop->index }}</td>
                            <td>{{ $detail_trans->judul }}</td>
                            <td class="text-center">{{ $detail_trans->telat_pengembalian }}</td>
                            <td class="text-center">{{ $detail_trans->denda }}</td>
                            <td class="text-center">{{ $detail_trans->created_at }}</td>
                            <!-- <td class="text-center">
                                <a href="" class="btn btn-sm btn-info">Edit</a>
                                <a href=""
                                    onclick="return confirm('Apa kamu yakin')" class="btn btn-sm btn-danger">Hapus</a>
                            </td> -->
                        </tr>
                        @empty
                        @endforelse
                        </tbody>
                        </table>
                        {{ $detail_transaksi->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection