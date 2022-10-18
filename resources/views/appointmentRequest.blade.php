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
                    <div class="card-header">{{ __('Appointment Requests') }}
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
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>First Visit</th>
                                        <th>Appointment Subject</th>
                                        <th>Appointment Date</th>
                                        <th>Most Preferred Time</th>
                                        <th>Less Preferred Time</th>
                                        <th colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($appointment as $appointment)
                                        <tr>
                                            <td>{{ $appointment->fname }}</td>
                                            <td>{{ $appointment->mname }}</td>
                                            <td>{{ $appointment->lname }}</td>
                                            <td>{{ $appointment->email}}</td>
                                            <td>{{ $appointment->phone }}</td>
                                            <td>{{ $appointment->address }}</td>
                                            <td>{{ $appointment->firstVisit }}</td>
                                            <td>{{ $appointment->appointmentSubject }}</td>
                                            <td>{{ $appointment->appointmenttDate }}</td>
                                            <td>{{ $appointment->mostPrefTime }}</td>
                                            <td>{{ $appointment->lessPrefTime }}</td>
                                            <td>{{ $appointment->status }}</td>
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
