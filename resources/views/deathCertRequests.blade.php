@extends('layouts.app')
<style>
    .page-contain {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
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
    <div style="text-align: center; margin-left:150mm ">
        <a href="{{ url('/fatherDeathRequest') }}" class="data-card">
            <h3></h3>
            <h4>Father Death Certificate </h4>
            <span class="link-text">
                {{ __('Show Requests') }}

            </span>
        </a>

        <a href="{{ url('/motherDeathRequest') }}" class="data-card">
            <h3></h3>
            <h4>Mother Certificate </h4>
            <span class="link-text">
                {{ __('Show Requests') }}
            </span>

        </a>

        <a href="{{ url('/spouseDeathRequest') }}" class="data-card">
            <h3></h3>
            <h4>Spouse Death Certificate </h4>
            <span class="link-text">
                {{ __('Show Requests') }}
            </span>
        </a>
        <a style="background-color: #314964" href="{{ url('/staffHome') }}" class="data-card">
            <h4 style="color: white">{{ _('Back to Dashboard') }} </h4>
        </a>
    </div>
@endsection
