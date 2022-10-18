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
                    <div class="card-header">{{ __('Marriage Certification Requests') }}
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
                                        <th>Spouse's First Name</th>
                                        <th>Spouse's Middle Name</th>
                                        <th>Spouse's Last Name</th>
                                        <th>Date of Marriage</th>
                                        <th>Place of Marriage</th>
                                        <th>Late Registration?</th>
                                        <th>Purpose</th>
                                        <th>Legal Proceedings</th>
                                        <th>Email</th>
                                        <th colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($marriage as $marriage)
                                        <tr>
                                            <td>{{ $marriage->sex }}</td>
                                            <td>{{ $marriage->fname }}</td>
                                            <td>{{ $marriage->mname }}</td>
                                            <td>{{ $marriage->lname }}</td>
                                            <td>{{ $marriage->birthdate }}</td>
                                            <td>{{ $marriage->birthplace }}</td>
                                            <td>{{ $marriage->idtype }}</td>
                                            <td>{{ $marriage->sfname }}</td>
                                            <td>{{ $marriage->smname }}</td>
                                            <td>{{ $marriage->slname }}</td>
                                            <td>{{ $marriage->marriageDate }}</td>
                                            <td>{{ $marriage->marriageplace }}</td>
                                            <td>{{ $marriage->lateReg }}</td>
                                            <td>{{ $marriage->purpose }}</td>
                                            <td>{{ $marriage->legalProceedings }}</td>
                                            <td>{{ $marriage->email }}</td>
                                            <td>{{ $marriage->status }}</td>
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
