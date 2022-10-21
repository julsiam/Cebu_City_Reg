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
        width: 100%;
        table-layout: fixed;
    }

    .tbl-header {
        background-color: #314964af;
    }

    .tbl-content {
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
    <section>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif

        <section>
            <div class="wrapper">
                <h1>{{ __('Certificate of Live Birth Requests') }}</h1>
                <a href="{{ url('/staffHome') }}"> <button>{{ __('Back to Dashboard') }}</button></a>
            </div>

            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
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
                            <th>Late Registration?</th>
                            <th>Purpose</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        @foreach ($birth as $birth)
                            <tr style="  border: 1px solid black">
                                <td>{{ $birth->sex }}</td>
                                <td>{{ $birth->fname }}</td>
                                <td>{{ $birth->mname }}</td>
                                <td>{{ $birth->lname }}</td>
                                <td>{{ $birth->birthdate }}</td>
                                <td>{{ $birth->birthplace }}</td>
                                <td>{{ $birth->idtype }}</td>
                                <td>{{ $birth->ffname }}</td>
                                <td>{{ $birth->fmname }}</td>
                                <td>{{ $birth->flname }}</td>
                                <td>{{ $birth->mfname }}</td>
                                <td>{{ $birth->mmname }}</td>
                                <td>{{ $birth->mlname }}</td>
                                <td>{{ $birth->lateReg }}</td>
                                <td>{{ $birth->purpose }}</td>
                                <td>{{ $birth->phone }}</td>
                                <td>{{ $birth->status }}</td>
                                <td><a href={{ 'editBirth/' . $birth['id'] }}>Update</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    @endsection
