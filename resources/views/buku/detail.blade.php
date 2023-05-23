@extends('layouts.master')

@section('topbar')
    @include('part.topbar')
@endsection

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('judul')
<h3 style="color:#1abc9c;">{{ $buku->judul }}</h3>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="content m-4">
        @if($buku->gambar !=null)
        <img class="img mb-3" src="{{asset('/images/'.$buku->gambar)}}"style="height:200px;width:200px">
        @else
        <img class="img mb-3" src="{{asset('/images/noImage.jpg')}}"style="height:200px;width:200px">
        @endif
        <h5 class="pengarang">Pengarang : <a href="#" style="color:#1abc9c;" style="text-decoration: none">{{ $buku->pengarang }}</a></h5>
        <h5 class="penerbit">Penerbit : <a href="#" style="color:#1abc9c;" style="text-decoration: none">{{ $buku->penerbit }}</a></h5>
        <h5 class="tahun_terbit">Tahun Terbit : <a href="#" style="color:#1abc9c;" style="text-decoration: none">{{ $buku->tahun_terbit }}</a></h5>
        <h5 class="deskripsi">Deskripsi : <br><p class="deskripsi mt-2" style="text-align:justify; text-justify:inter-word; text-indent:1rem; letter-spacing:.1rem; word-spacing:.1rem">{{ $buku->deskripsi }}</p></h5>
        <a href="/buku" class="btn btn-primary" style="background-color:#1abc9c; border-style:none">Kembali</a>
        </div>
    </div>
@endsection
