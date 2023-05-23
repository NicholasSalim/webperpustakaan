@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h3 style="color:#1abc9c;">Edit Data User</h3>
@endsection

@section('content')
    <form action="/anggota/{{ $user->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="card pb-5">
            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md  font-weight-bold mt-2" style="color:#1abc9c;">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
            </div>

            @error('name')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md  font-weight-bold" style="color:#1abc9c;">Nomor Induk Siswa</label>
                <input type="text" name="npm" class="form-control" value="{{ old('npm', $profile->npm) }}">
            </div>

            @error('npm')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md  font-weight-bold" style="color:#1abc9c;">Kelas</label>
                <input type="text"  name= "prodi" class="form-control" value="{{ old('prodi', $profile->prodi) }}">
            </div>

            @error('prodi')
                <div class="alert-danger mx-2"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md  font-weight-bold" style="color:#1abc9c;">Alamat</label>
                <input type="text" name ="alamat" class="form-control" value="{{ old('alamat', $profile->alamat) }}">
            </div>

            @error('alamat')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="nama" class="text-md  font-weight-bold" style="color:#1abc9c;">Nomor Telepon</label>
                <input type="text" name="noTelp" class="form-control" value="{{ old('noTelp', $profile->noTelp) }}">
            </div>

            @error('noTelp')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="form-group mx-4 my-2">
                <label for="gambar" class="text-md  font-weight-bold" style="color:#1abc9c;">Tambah Foto Profil</label>
                <div class="custom-file">
                    <input type="file" name="photoProfile" value="{{ old('photoProfile', $profile->photoProfile) }}">
                </div>
            </div>

            @error('photoProfile')
                <div class="alert-danger"> {{ $message }}</div>
            @enderror

            <div class="button-save d-flex justify-content-end">
                <a href="/anggota" class="btn btn-danger mt-4 px-3 py-1">Batal</a>
                <button type="submit" class="btn btn-primary mt-4 mx-2 px-4 py-1" style="background-color:#1abc9c;">Simpan</button>
    </form>
    </div>
    </div>
@endsection
