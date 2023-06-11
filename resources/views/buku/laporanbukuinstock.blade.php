@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h3 style="color:#1abc9c;">Laporan Buku</h3>
@endsection


@push('styles')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.12.1/date-1.1.2/fc-4.1.0/r-2.3.0/sc-2.0.7/datatables.min.css" />
@endpush


@push('scripts')
    <script src="{{ '/template/vendor/datatables/jquery.dataTables.min.js' }}"></script>
    <script src="{{ '/template/vendor/datatables/dataTables.bootstrap4.min.js' }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush

@section('content')
    @if (Auth::user()->isAdmin == 1)
    <div class="container">
        <a href="/buku/create" class="btn btn-primary mb-3 " style="background-color:#1abc9c; border-style:none"><i class="fa-solid fa-plus"></i> Tambah</a>
        <a href="/cetakbukuinstock" class="btn btn-primary mb-3 mx-2" style="background-color:#1abc9c; border-style:none;"><i class="fa-solid fa-print"></i> Cetak</a>
        <div class="dropdown mb-3">
  <button class="btn  dropdown-toggle" style="background-color:#1abc9c; color:white; border-style:none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Sort berdasarkan..
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/reportbuku">Semua</a>
    <a class="dropdown-item" href="/reportbuku/dipinjam">Dipinjam</a>
    <a class="dropdown-item" href="/reportbuku/instock">In Stock</a>
  </div>
</div>
    </div>
    <div class="col-lg-auto" >
        <div class="card mb-4" style="border-style:none;" >
            <div class="table-responsive p-3" >
                <table class="table align-items-center justify-content-center table-flush table-hover" id="dataTableHover" style="font-size: .7rem">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun terbit</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($instock as $item )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->kode_buku }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->pengarang }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->isAdmin == 0)
    
    <div class="col-lg-auto" >
    <div class="row ml-2 mb-2">
        @if ($pinjamanUser->count() === 0)
            <p class="mr-1" style="font-size:14px;">Halo {{ Auth::user()->name }}, sepertinya kamu belum meminjam buku.</p>
            <a style="color:#1abc9c; font-size:14px;" href="/peminjaman/create">Klik tautan ini untuk meminjam</a>
        @endif

</div>
        <div class="card mb-4" style="border-style:none;">
            <div class="table-responsive p-3">
                <table class="table align-items-center justify-content-center table-flush table-hover" id="dataTableHover" style="font-size: .7rem">
                    <thead class="thead-light">
                        <tr class="">
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Wajib Pengembalian</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pinjamanUser as $item )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->buku->kode_buku }}</td>
                            <td>{{ $item->tanggal_pinjam }}</td>
                            <td>{{ $item->tanggal_wajib_kembali }}</td>
                            <td>{{ $item->tanggal_pengembalian }}</td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    @endsection
