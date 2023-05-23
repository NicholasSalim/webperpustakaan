@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h3 style="color:#1abc9c;">Form Peminjaman Buku</h3>
@endsection

@section('content')
    <div class="card">

        <div class="card-body">

            <form action="/peminjaman" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama" class=" font-weight-bold" style="color:#1abc9c;">Nama Peminjam</label>
                    @if(Auth::user()->isAdmin == 1)
                    <select name="users_id" id="" class="form-control">
                        <option value=""></option>
                        @forelse ($peminjam as $item)
                                <option value="{{ $item->id }}">{{ $item->user->name}} ( {{ $item->npm }} )</option>
                            @empty
                                Tidak ada user
                            @endforelse
                    </select>
                    @endif

                    @if(Auth::user()->isAdmin == 0)
                    <select name="users_id" id="" class="form-control">
                        <option value="{{ $peminjam->users_id }}">{{ $peminjam->user->name }} ( {{ $peminjam->npm }} )</option>
                    </select>
                    @endif

                    @error('users_id')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </div>


                <div class="fom-group">
                    <label for="buku" class="font-weight-bold" style="color:#1abc9c;">Buku yang akan dipinjam</label>
                    <select name="buku_id" id="" class="form-control">
                        <option value=""></option>
                        @forelse ($buku as $item)
                                <option value="{{ $item->id }}">{{ $item->judul}} ( {{ $item->kode_buku }} ) - {{ $item->status }}</option>
                            @empty
                                Tidak ada buku yang tersedia
                            @endforelse
                    </select>
                </div>

                @error('buku_id')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror

                <div class="d-flex justify-content-end mt-5">
                    <a href="/peminjaman" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary mx-1 px-4" style="background-color:#1abc9c; border-style:none">Submit</button>
                </div>


            </form>

        </div>
    </div>
@endsection
