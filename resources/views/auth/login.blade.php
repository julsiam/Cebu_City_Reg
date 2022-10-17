@extends('layouts.app')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        box-sizing: border-box;
    }

    html {
        overflow-y: scroll;
    }

    body {
        background: #314964;
        font-family: Poppins;
    }

    .form {
        box-shadow: 10px 50px 50px 16px #0000001a;
        background-color: #EAE3D6;
        padding: 40px;
        max-width: 500px;
        margin: 50px auto;
        border-radius: 4px;

    }

    .form h1 {
        text-align: center;
        color: #314964;
        font-weight: 300;
        font-size: 30px;
        margin: 0 0 15px;
    }

    .box {
        margin: 0;
        padding: 0;
        position: relative;
    }


    .header {
        height: 220px;
        left: 0;
        position: relative;
        text-align: center;
        top: -10mm;
        width: inherit;
    }

    .header:before {
        border: 2px solid #314964;
        border-radius: 100%;
        content: "";
        height: 150px;
        left: 0;
        margin: 50px auto;
        padding: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 150px;
        z-index: 2;
        -webkit-transform: scale(1.24, 1.24);
        -moz-transform: scale(1.24, 1.24);
        transform: scale(1.24, 1.24);
    }

    .header img {
        border: 4px solid #314964;
        border-radius: 100%;
        height: 150px;
        width: 150px;
        margin: 50px auto;
        object-fit: cover;
    }

    label {
        transform: translateY(6px);
        margin-left: 15px;
        color: black;
        transition: all 0.25s ease;
        pointer-events: none;
        width: 100px;
    }

    label .req {
        margin: 2px;
        color: #314964;
    }

    .input,
    textarea {
        background-color: #e7e4de;
        margin-left: 15px;
        font-size: 15px;
        font-family: 'Courier New', Courier, monospace;
        display: block;
        color: #000000;
        width: 100%;
        height: 100%;
        padding: 8px 10px;
        border: 1px solid #a09c93;
        border-radius: 8px;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .field-wrap {
        position: relative;
        margin-bottom: 15px;
    }

    button {
        border: 0;
        outline: none;
        border-radius: 35px;
        padding: 8px;
        width: 25mm;
        font-size: 15px;
        font-weight: 200;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        background: #314964;
        color: white;
        transition: all 0.5s ease;    
        cursor: pointer;
    }

    button:hover,
    button:focus {
        background: #000000;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form">
                    <div class="tab-content">
                        <div id="signin">
                            <h1><span style="color:#314964">| <b> CCRS</b> </span>Staff Log in Form</h1>

                            <form method="POST" action="{{route('login') }}">
                                @csrf
                                <div class="box header">
                                    <img src="image/Cebu Seal.png" alt="" />
                                </div>
                                <div class="field-wrap">
                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
