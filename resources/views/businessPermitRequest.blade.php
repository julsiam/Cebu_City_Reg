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
        width: 250%;
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
            <h1>{{ __('Business Permit Requests') }}</h1>
            <a href="{{ url('/staffHome') }}"> <button>{{ __('Back to Dashboard') }}</button></a>
        </div>

        <div class="tbl-content">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead style="background-color: #314964af;">
                        <tr>
                            <th>Business<br>Type</th>
                            <th>DTI No.</th>
                            <th>Payment<br>Mode</th>
                            <th>Application<br>Date</th>
                            <th>TIN</th>
                            <th>Ammend<br>From</th>
                            <th>Ammend<br>To</th>
                            <th>First<br>Name</th>
                            <th>Middle<br>Name</th>
                            <th>Last<br>Name</th>
                            <th>Trade<br>Name</th>
                            <th>Incentive</th>
                            <th>Business<br>Address</th>
                            <th>Postal<br>Code</th>
                            <th>Business <br> Hotline</th>
                            <th>Owner's<br>Address</th>
                            <th>Owner's<br>Postal Code</th>
                            <th>Owner's<br>Hotline</th>
                            <th>Emergency<br>Contact<br>Person</th>
                            <th>Emergency<br>Contact</th>
                            <th>Business<br>Area</th>
                            <th>Total<br>No.of<br>Employee</th>
                            <th>Lessor<br>Name</th>
                            <th>Lessor<br>Address</th>
                            <th>Lessor<br>Phone</th>
                            <th>Lessor<br>Email</th>
                            <th>Monthly<br>Rent</th>
                            <th>Filled-Up<br>File</th>
                            <th>Occupancy<br>File</th>
                            <th>Brgy.<br>Clearance<br>File</th>
                            <th>Sanitary<br>File</th>
                            <th>Fire<br>Safety<br>File</th>
                            <th>Other<br>File</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>
                </table>
            </div>


            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($businessPermit as $businessPermit)
                        <tr style="  border: 1px solid black">
                            <td>{{ $businessPermit->businessType }}</td>
                            <td>{{ $businessPermit->dtiNo }}</td>
                            <td>{{ $businessPermit->paymentMode }}</td>
                            <td>{{ $businessPermit->applicationDate }}</td>
                            <td>{{ $businessPermit->tin }}</td>
                            <td>{{ $businessPermit->ammendFrom }}</td>
                            <td>{{ $businessPermit->ammendTo }}</td>
                            <td>{{ $businessPermit->fname }}</td>
                            <td>{{ $businessPermit->mname }}</td>
                            <td>{{ $businessPermit->lname }}</td>
                            <td>{{ $businessPermit->tradeName }}</td>
                            <td>{{ $businessPermit->incentive }}</td>
                            <td>{{ $businessPermit->businessAdd }}</td>
                            <td>{{ $businessPermit->postalCode }}</td>
                            <td>{{ $businessPermit->businessHotline }}</td>
                            <td>{{ $businessPermit->ownerAdd }}</td>
                            <td>{{ $businessPermit->ownerPostalCode }}</td>
                            <td>{{ $businessPermit->ownerHotline }}</td>
                            <td>{{ $businessPermit->contactPerson }}</td>
                            <td>{{ $businessPermit->emergencyContact }}</td>
                            <td>{{ $businessPermit->businessArea }}</td>
                            <td>{{ $businessPermit->employeeTotal }}</td>
                            <td>{{ $businessPermit->lessorName }}</td>
                            <td>{{ $businessPermit->lessorAddress }}</td>
                            <td>{{ $businessPermit->lessorPhone }}</td>
                            <td>{{ $businessPermit->lessorEmail }}</td>
                            <td>{{ $businessPermit->monthlyRent }}</td>
                            <td>{{ $businessPermit->filledupFile }}</td>
                            <td>{{ $businessPermit->occupancyFile }}</td>
                            <td>{{ $businessPermit->brgyClearanceFile }}</td>
                            <td>{{ $businessPermit->sanitaryFile }}</td>
                            <td>{{ $businessPermit->fireSafetyFile }}</td>
                            <td>{{ $businessPermit->otherFile }}</td>
                            <td>{{ $businessPermit->otherFile }}</td>
                            <td>{{ $businessPermit->status }}</td>
                            <td><a href={{ 'editBusiness/' . $businessPermit['id'] }}>Update</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
