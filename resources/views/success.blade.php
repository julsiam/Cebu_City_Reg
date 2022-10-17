@extends('layouts.success')

<style>
    button {
        border: 0;
        outline: none;
        padding: 10px;
        width: 50mm;
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
        background: #192533;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">{{ __('We are  now processing your request!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                    {{ __('Thank you for filling up! We will process your request as soon as possible. We will just email or contact you once it is ready for procurement. ') }}
                   
                    <a href="{{ url('/') }}"><button style="margin: 10mm 50mm 10mm 85mm; border-radius: 25px" type="submit">
                        {{ __('Back to Home') }}
                    </button></a>
                </div>

            </div>
        </div>
    </div>
@endsection
