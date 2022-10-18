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
                    <div class="card-header">{{ __('Business Permit Requests') }}
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
                                        <th>Business Type</th>
                                        <th>DTI No.</th>
                                        <th>Payment Mode</th>
                                        <th>Application Date</th>
                                        <th>TIN</th>
                                        <th>Ammend From</th>
                                        <th>Ammend To</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Trade Name</th>
                                        <th>Permit Options</th>
                                        <th>Incentive</th>
                                        <th>Business Address</th>
                                        <th>Postal Code</th>
                                        <th>Business Hotline</th>
                                        <th>Business Email</th>
                                        <th>Owner's Address</th>
                                        <th>Owner's Postal Code</th>
                                        <th>Owner's Hotline</th>
                                        <th>Emergency Contact Person</th>
                                        <th>Emergency Contact</th>
                                        <th>Contact Person Email</th>
                                        <th>Business Area</th>
                                        <th>Total No. of Employee</th>
                                        <th>Lessor Address</th>
                                        <th>Lessor Email</th>
                                        <th>Monthly Rent</th>
                                        <th>Filled-Up File</th>
                                        <th>Occupancy File</th>
                                        <th>Brgy.Clearance File</th>
                                        <th>Sanitary File</th>
                                        <th>Fire Safety File</th>
                                        <th>Other File</th>
                                        <th colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($businessPermit as $businessPermit)
                                        <tr>
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
                                            <td>{{ $businessPermit->tradename }}</td>
                                            <td>{{ $businessPermit->permitOption }} </td>
                                            <td>{{ $businessPermit->incentive }}</td>
                                            <td>{{ $businessPermit->businessAdd }}</td>
                                            <td>{{ $businessPermit->postalCode }}</td>
                                            <td>{{ $businessPermit->businessHotline }}</td>
                                            <td>{{ $businessPermit->businessEmail }}</td>
                                            <td>{{ $businessPermit->ownerAdd }}</td>
                                            <td>{{ $businessPermit->ownerPostalCode }}</td>
                                            <td>{{ $businessPermit->ownerHotline }}</td>
                                            <td>{{ $businessPermit->contacPerson }}</td>
                                            <td>{{ $businessPermit->emergencyContact }}</td>
                                            <td>{{ $businessPermit->contactPersonEmail }}</td>
                                            <td>{{ $businessPermit->businessArea }}</td>
                                            <td>{{ $businessPermit->employeeTotal }}</td>
                                            <td>{{ $businessPermit->lessorName }}</td>
                                            <td>{{ $businessPermit->lessorAddress }}</td>
                                            <td>{{ $businessPermit->lessorPhone }}</td>
                                            <td>{{ $businessPermit->lessorEmail }}</td>
                                            <td>{{ $businessPermit->monthlyRent }}</td>
                                            <td>{{ $businessPermit->filledupFile }}</td>
                                            <td>{{ $businessPermit->occupancyFIle }}</td>
                                            <td>{{ $businessPermit->brgyClearanceFile }}</td>
                                            <td>{{ $businessPermit->sanitaryFile }}</td>
                                            <td>{{ $businessPermit->fireSafetyFile }}</td>
                                            <td>{{ $businessPermit->otherFile }}</td>
                                            <td>{{ $businessPermit->otherFile }}</td>
                                            <td>{{ $businessPermit->status }}</td>
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
