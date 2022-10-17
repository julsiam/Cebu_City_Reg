@extends('layouts.app')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index Page</title>
</head>

<body>
    <div class="container">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <h1>Birth Certification Requests</h1>
                <tr>
                    <th>Sex</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
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
                    <th colspan="2">Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($birth as $birth)
                    <tr>
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

                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</body>

</html>
