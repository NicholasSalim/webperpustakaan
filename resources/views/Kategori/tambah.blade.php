@extends('layouts.master')


@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h3 style="color:#1abc9c;">Tambah Kategori</h3>
@endsection

@section('content')
    <div class="card px-4 pt-3 pb-5">

        <form action="/kategori" method="post">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput" style="color:#1abc9c;">Nama Kategori</label>
                <input name="nama" type="text" class="form-control" id="formGroupExampleInput">
            </div>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="color:#1abc9c;">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>

            <a href="/kategori" class="btn btn-danger">Batal</a>
            <button class="btn btn-info" style="background-color:#1abc9c;">Tambah</button>

        </form>
    </div>
@endsection
