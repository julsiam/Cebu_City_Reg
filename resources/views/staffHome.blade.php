@extends('layouts.app')
<style>
    .page-contain {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        /* background: #e7f3f1; */
        border: 0.75em solid white;
        padding: 2em;
        font-family: sans-serif;
    }


    .data-card {
        display: grid;
        flex-direction: column;
        /* margin: 10px auto; */
        max-width: 20.75em;
        /* min-height: 20.75em; */
        overflow: hidden;
        border-radius: 0.5em;
        text-decoration: none;
        background: white;
        margin: 20px;
        padding: 0.8em;
        box-shadow: 0 1.5em 2em 1em rgba(0, 0, 0, 0.1);
        transition: transform 0.45s ease, background 0.45s ease;
    }

    .data-card:hover {
        box-shadow: 4px 4px 10px rgba(121, 123, 125, 0.5);
    }


    .data-card h3 {
        color: #2e3c40;
        font-weight: 600;
        line-height: 1;
        margin: 0 0 0.142857143em;
        border-bottom: 2px solid #314964;
        transition: color 0.45s ease, border 0.45s ease;
    }

    .data-card h4 {
        color: #627084;
        text-transform: uppercase;
        font-size: 1em;
        font-weight: 700;
        line-height: 1;
        letter-spacing: 0.1em;
        margin: 0 0 1.777777778em;
        transition: color 0.45s ease;
    }

    .data-card p {
        color: #314964;
        font-weight: 300;
        font-size: 12px;
        line-height: 1.5;
        margin: 0 0 2em;
        transform: translateY(1em);
        transition: opacity 0.45s ease, transform 0.5s ease;
    }

    .data-card .link-text {
        display: block;
        color: #314964;
        font-size: 1em;
        font-weight: 500;
        line-height: 1.2;
        margin: auto 0 0;
        transition: color 0.45s ease;
    }

    .data-card .link-text svg {
        margin-left: 0.5em;
        transition: transform 0.6s ease;
    }

    .data-card .link-text svg path {
        transition: fill 0.45s ease;
    }

    @-webkit-keyframes point {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(0.125em);
        }
    }

    @keyframes point {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(0.125em);
        }
    }
</style>


@section('content')
    <header>
        <section id="services" class="page-contain">
            <a href="{{ url('/birthRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/birth.png" alt=""></h3>
                <h4>Birth Certificate</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}

                </span>
            </a>

            <a href="{{ url('/marriageRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/marriage.png" alt=""></h3>
                <h4>Marriage Certificate</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>

            </a>

            <a href="{{ url('/cenomarRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/cenomar.png" alt=""></h3>
                <h4>CENOMAR</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>


            <a href="{{ url('/deathCertRequests') }}" class="data-card">
                <h3><img style="width:120px" src="image/death.png" alt=""></h3>
                <h4>Death Certificate</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>

            <a href="{{ url('/scholarshipRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/scholarship.png" alt=""></h3>
                <h4>Scholarship</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>

            <a href="{{ url('/businessPermitRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/permit.png" alt=""></h3>
                <h4>Business permit</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>

            <a href="{{ url('/appointmentRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/appointment.png" alt=""></h3>
                <h4>Appointment</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>

            <a href="{{ url('/suggestionsRequest') }}" class="data-card">
                <h3><img style="width:120px" src="image/suggestions.png" alt=""></h3>
                <h4>Suggestions</h4>
                <span class="link-text">
                    {{ __('Show Requests') }}
                </span>
            </a>

        </section>
    </header>
@endsection
{{-- 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url('/birthRequest') }}"> <button>
                                {{ __('Birth Certificate Request') }}
                        </button></a>

                        <a href="{{ url('/marriageRequest') }}"> <button>
                                {{ __('Marriage Certificate Request') }}
                        </button></a>

                        <a href="{{ url('/cenomarRequest') }}"> <button>
                                {{ __('CENOMAR Request') }}</a>
                        </button>

                        <a href="{{ url('/fatherDeathRequest') }}"> <button>
                                {{ __('Father Death Certificate Request') }}</a>
                        </button>

                        <a href="{{ url('/businessPermitRequest') }}"> <button>
                                {{ __('Business Permit Request') }}</a>
                        </button>

                        <a href="{{ url('/scholarshipRequest') }}"> <button>
                                {{ __('Scholarship Request') }}</a>
                        </button>

                        <a href="{{ url('/appointmentRequest') }}"> <button>
                                {{ __('Appointment Request') }}</a>
                        </button>

                        <a href="{{ url('/suggestionsRequest') }}"> <button>
                                {{ __('Suggestions') }}</a>
                        </button>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
