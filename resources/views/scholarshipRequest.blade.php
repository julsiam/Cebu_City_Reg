@extends('layouts.app')
<style>
    section {
        margin: 15px;
    }

    .wrapper {
        display: grid;
        grid-template-columns: 3fr .5fr;

    }

    h1 {
        font-size: 30px;
        color: 314964;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
    }

    table {
        width: 200%;
        table-layout: fixed;

    }

    .tbl-header {}

    .tbl-content {
        width: 100%;
        height: 420px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(0, 0, 0, 0.3);
    }

    th {
        padding: 20px 10px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: rgb(0, 0, 0);
        text-transform: uppercase;
    }


    td {
        padding: 5px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: rgb(0, 0, 0);

    }

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
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif

    <section>
        <div class="wrapper">
            <h1>{{ __('Scholarship Requests') }}</h1>
            <a href="{{ url('/staffHome') }}"> <button>{{ __('Back to Dashboard') }}</button></a>
        </div>

        <div class="tbl-content">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead style="background-color: #314964af;">
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
                            <th>Status</th>
                            <th>Status Update</th>
                        </tr>
                    </thead>
                </table>
            </div>


            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($scholarship as $scholarship)
                        <tr style="  border: 1px solid black">
                            <td>{{ $scholarship->fname }}</td>
                            <td>{{ $scholarship->mname }}</td>
                            <td>{{ $scholarship->lname }}</td>
                            <td>{{ $scholarship->birthDate }}</td>
                            <td>{{ $scholarship->birthPlace }}</td>
                            <td>{{ $scholarship->sex }}</td>
                            <td>{{ $scholarship->civilStatus }}</td>
                            <td>{{ $scholarship->citizenship }}</td>
                            <td>{{ $scholarship->phone }}</td>
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
                            <td><a href={{ 'editScholarship/' . $scholarship['id'] }}>Update</a>
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
