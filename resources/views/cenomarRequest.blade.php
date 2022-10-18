@extends('layouts.app')
<style>
     button {
        border: 0;
        outline: none;
        border-radius: 50px;
        padding: 8px;
        width: 65mm;
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
            <div style="width: 100%">
                <div class="card" style="width:105%">
                    <div class="card-header">{{ __('Certificate of No Marriage (CENOMAR) Requests') }}
                        <a href="{{ url('/staffHome') }}"> <button>{{ __('Back to Dashboard') }}</button></a>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div><br />
                            @endif
                            <table style="margin: 0% auto">
                                <thead>
                                    <tr>
                                        <th>Sex</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Birthdate</th>
                                        <th>Place of Birth</th>
                                        <th>ID Presented</th>
                                        <th>Father's First Name</th>
                                        <th>Father's Middle Name</th>
                                        <th>Father's Last Name</th>
                                        <th>Mother's First Name</th>
                                        <th>Mother's Middle Name</th>
                                        <th>Mother's Last Name</th>
                                        <th>Purpose</th>
                                        <th>Email</th>
                                        <th colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cenomar as $cenomar)
                                        <tr>
                                            <td>{{ $cenomar->sex }}</td>
                                            <td>{{ $cenomar->fname }}</td>
                                            <td>{{ $cenomar->mname }}</td>
                                            <td>{{ $cenomar->lname }}</td>
                                            <td>{{ $cenomar->birthdate}}</td>
                                            <td>{{ $cenomar->birthplace }}</td>
                                            <td>{{ $cenomar->idtype }}</td>
                                            <td>{{ $cenomar->ffname }}</td>
                                            <td>{{ $cenomar->fmname }}</td>
                                            <td>{{ $cenomar->flname }}</td>
                                            <td>{{ $cenomar->mfname }}</td>
                                            <td>{{ $cenomar->mmname }}</td>
                                            <td>{{ $cenomar->mlname }}</td>
                                            <td>{{ $cenomar->purpose }}</td>
                                            <td>{{ $cenomar->email }}</td>
                                            <td>{{ $cenomar->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
