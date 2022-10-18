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
                    <div class="card-header">{{ __('Scholarship Requests') }}
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
                                        <th>Birthdate</th>
                                        <th>Place of Birth</th>
                                        <th>Sex</th>
                                        <th>Civil Status</th>
                                        <th>Citizenship</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Present Address</th>
                                        <th>Zip Code</th>
                                        <th>School Sector</th>
                                        <th>School Last Attendee</th>
                                        <th>School Address</th>
                                        <th>Father's Full Name</th>
                                        <th>Father's Address</th>
                                        <th>Father's Phone</th>
                                        <th>Father’s Occupation</th>
                                        <th>Father’s Employer</th>
                                        <th>Employer's Address</th>
                                        <th>Father’s Educational Attainment</th>
                                        <th>Mother’s Full Name</th>
                                        <th>Mother’s Address</th>
                                        <th>Mother’s Phone</th>
                                        <th>Mother’s Occupation</th>
                                        <th>Mother’s Employer</th>
                                        <th>Employer's Address</th>
                                        <th>Mother’s Education Attainment</th>
                                        <th>No. of Siblings</th>
                                        <th>Pantawid Member?</th>
                                        <th>Academic File</th>
                                        <th>Income File</th>
                                        <th colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($scholarship as $scholarship)
                                        <tr>
                                            <td>{{ $scholarship->fname }}</td>
                                            <td>{{ $scholarship->mname }}</td>
                                            <td>{{ $scholarship->lname }}</td>
                                            <td>{{ $scholarship->birthDate }}</td>
                                            <td>{{ $scholarship->birthplace }}</td>
                                            <td>{{ $scholarship->sex }}</td>
                                            <td>{{ $scholarship->civilStatus }}</td>
                                            <td>{{ $scholarship->citizenship }}</td>
                                            <td>{{ $scholarship->phone }}</td>
                                            <td>{{ $scholarship->email }}</td>
                                            <td>{{ $scholarship->presentAdd }}</td>
                                            <td>{{ $scholarship->zipCode }}</td>
                                            <td>{{ $scholarship->schoolSector }}</td>
                                            <td>{{ $scholarship->schoolLastAttendee }}</td>
                                            <td>{{ $scholarship->schoolAdd }}</td>
                                            <td>{{ $scholarship->ffname }}</td>
                                            <td>{{ $scholarship->fatherAddress }}</td>
                                            <td>{{ $scholarship->fatherPhone }}</td>
                                            <td>{{ $scholarship->fatherOccupation }}</td>
                                            <td>{{ $scholarship->fatherEmployer }}</td>
                                            <td>{{ $scholarship->fatherEmployerAdd }}</td>
                                            <td>{{ $scholarship->fatherEdu }}</td>
                                            <td>{{ $scholarship->mfname }}</td>
                                            <td>{{ $scholarship->motherAdd }}</td>
                                            <td>{{ $scholarship->motherPhone }}</td>
                                            <td>{{ $scholarship->motherOccupation }}</td>
                                            <td>{{ $scholarship->motherEmployer }}</td>
                                            <td>{{ $scholarship->motherEmployerAdd }}</td>
                                            <td>{{ $scholarship->motherEdu }}</td>
                                            <td>{{ $scholarship->siblings }}</td>
                                            <td>{{ $scholarship->pantawidMember }}</td>
                                            <td>{{ $scholarship->academicFile }}</td>
                                            <td>{{ $scholarship->incomeFile }}</td>
                                            <td>{{ $scholarship->status }}</td>
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
