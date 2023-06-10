@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-dark">{{ __('Verifikasi Email Anda') }}</div>

                <div class="card-body text-dark align-items-start">
                    @if (session('resent'))
                        <div class="alert alert-info" role="alert">
                            {{ __('Link verifikasi telah dikirim ke email anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, mohon cek email anda untuk link verifikasi.') }}
                    {{ __('Jika anda tidak menerima link dari email, silahkan klik tombol dibawah untuk request link verifikasi lagi.') }},
                    <div class="card-body">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf

                        <button type="submit" class="btn px-5" style="background-color:#1abc9c; color:white;">{{ __('Request') }}</button>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
