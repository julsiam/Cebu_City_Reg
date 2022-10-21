<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/cf7a571938.js" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/birthForm.css') }}" />
    <title>SD 205 | Registration</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container">
        <div class="navigation">
            <img class="logo" src="image/Cebu Seal.png" alt="logo">
            <ul>
                <li>
                    <a href="">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/') }}">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#orders">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>

                <li>
                    <a href="#customers">
                        <span class="icon"><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                        <span class="title">About</span>
                    </a>
                </li>

                <li>
                    <a href="#products">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>

                        <span class="title">Account</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                        <span class="title">Message</span>
                    </a>
                </li>

                <li>
                    <a href="./loginpage.html">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i> </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
        </div>

        <section>
            <div class="form">
                <div class="tab-content">
                    <div id="signup">
                        <h1><span style="color:#314964">|<b>Business Permit Application</b></h1>
                        <form method="post" action="{{ url('addBusiness') }}">
                            {{ csrf_field() }} <br>
                            <h3>Business Information</h3> <br>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Type of Business<span class="req">*</span>
                                    </label>
                                    <input name="businessType" id="Type of Business" type="text" required
                                        autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        DTI/SEC/CDA Reg.No.<span id="nameError" class="req"></span>
                                    </label>
                                    <input name="dtiNo" id="DTI/SEC/CDA Registration No." type="text" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Mode of Payment:<span class="req">*</span>
                                    </label>
                                    <input name="paymentMode" id="Mode of Payment" required autocomplete="off" />

                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Date of Application<span class="req">*</span>
                                    </label>
                                    <input name="applicationDate" id="date" type="date" required
                                        autocomplete="off">
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Tin No<span class="req">*</span>
                                    </label>
                                    <input name="tin" id="Tin No" required autocomplete="off" />

                                </div>
                            </div>

                            <h3>Ammendment</h3>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        From<span class="req">*</span>
                                    </label>
                                    <input name="ammendFrom" id="Ammendment From" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        To<span class="req">*</span>
                                    </label>
                                    <input name="ammendTo" id="Ammendment To" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>
                            </div>

                            <h3>Registrant Info</h3> <br>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input name="fname" id="First Name" minlength="2" maxlength="25"
                                        name="fname" type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Middle Name<span id="nameError" class="req"></span>
                                    </label>
                                    <input name="mname" id="Middle Name" minlength="2" maxlength="25"
                                        type="text" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input name="lname" id="Last Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Trade Name/Franchise
                                </label>
                                <input name="tradeName" id="Trade Name/Franchise:" type="text" required
                                    autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <h3>Are you enjoying tax incentive from any Government Entity?</h3>
                                <select name="incentive" id="Government Incentive" required autocomplete="off">
                                    <option value=""> -Choose-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div> <br>

                            <h3>Other Information</h3>
                            <div class="top-row">
                                <p class="note"><strong> Note:</strong> For renewal applications, do not fill up this
                                    section unless certain Information have changed.</p> <br>
                                <div class="field-wrap">
                                    <label>
                                        Business Address
                                    </label>
                                    <input name="businessAdd" id="Business Address" type="text" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Business Postal Code
                                    </label>
                                    <input name="postalCode" id="Postal Code" type="text" />
                                </div>

                                <div class="field-wrap">
                                    <label for="phone">Business Hotline No.</label>
                                    <input type="tel" id="phone" pattern="[0-9]{11}"
                                        placeholder="09123456789" name="businessHotline" />
                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Owner's Address
                                    </label>
                                    <input name="ownerAdd" id="Owner Address" minlength="2" maxlength="25"
                                        type="text" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Owner Postal Code
                                    </label>
                                    <input name="ownerPostalCode" id="Owner Postal Code" type="text" />
                                </div>

                                <div class="field-wrap">
                                    <label for="phone">Mobile Number</label>
                                    <input type="tel" id="phone" pattern="[0-9]{11}"
                                        placeholder="09123456789" name="ownerHotline" />
                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    In case of emergency provide name of contact person:
                                </label>
                                <input name="contactPerson" id="Emergency Contact Person"
                                    placeholder="Full Name of Contact Person" type="text" />
                            </div>


                            <div class="field-wrap">
                                <label for="phone">Tel/Mobile number</label>
                                <input type="tel" id="phone" pattern="[0-9]{11}" placeholder="09123456789"
                                    name="emergencyContact" />
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Business Area<span class="req">*</span>
                                </label>
                                <input name="businessArea" id="Last Name" type="text" required
                                    autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label for="quantity">Total No. of Employees in Establishment</label>
                                <input type="number" id="Number of Employees" name="employeeTotal">
                            </div>

                            <h3> Lessor Info</h3>
                            <div class="top-row">
                                <p class="note"><strong> Note:</strong> Note: Fill up only if Business place is
                                    Rented</p> <br>
                                <div class="field-wrap">
                                    <label>
                                        Full Name
                                    </label>
                                    <input name="lessorName" id="Owner Address" type="text" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Address
                                    </label>
                                    <input name="lessorAdd" id="Owner Postal Code" type="text" />
                                </div>

                                <div class="field-wrap">
                                    <label for="phone">Mobile Number
                                    </label>
                                    <input type="tel" id="phone" pattern="[0-9]{11}"
                                        placeholder="09123456789" name="lessorPhone" />
                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Email Address
                                </label>
                                <input name="lessorEmail" type="email" />
                            </div>

                            <div class="field-wrap">
                                <div class="field-wrap">
                                    <label for="quantity">Monthly Rented</label>
                                    <input type="number" id="Monthly Rented" name="monthlyRent">
                                </div>
                            </div>

                            <h3>Requirements</h3> <br>
                            <div class="field-wrap">
                                <p>Upload File of Filled-Up Business Permit Application Form in PDF (.pdf) File Format
                                </p>
                                <label for="myfile">Filled-Up Business Permit Application Form </label>
                                <input type="file" id="myfile" name="filledupFile">
                            </div>
                            <div class="field-wrap">
                                <p>Upload File of Occupancy Permit (For New Applications) by Municipal Engineer&#39;s
                                    Office in PDF (.pdf) File Format (optional, if
                                    required)</p>
                                <label for="myfile">File of Occupancy Permit</label>
                                <input type="file" id="myfile" name="occupancyFile">
                            </div>
                            <div class="field-wrap">
                                <p>Upload File of Barangay Business Clearance/Cedula by Barangay/Municipal
                                    Treasurer&#39;s Office (MTO) in PDF (.pdf) File
                                    Format (optional, if required)</p>
                                <label for="myfile"> File of Barangay Business Clearance/Cedula></label>
                                <input type="file" id="myfile" name="brgyClearanceFile">
                            </div>
                            <div class="field-wrap">
                                <p>Upload File of Sanitary Permit/Health Certificate by Municipal Health Office (MHO) in
                                    PDF (.pdf) File Format (optional, if
                                    required)</p>
                                <label for="myfile">File of Sanitary Permit/Health Certificate</label>
                                <input type="file" id="myfile" name="sanitaryFile">
                            </div>
                            <div class="field-wrap">
                                <p>Upload File of Valid Fire Safety Inspection Certificate by Bureau of Fire Protection
                                    (BFP) in PDF (.pdf) File Format (optional, if
                                    required)</p>
                                <label for="myfile"> File of Valid Fire Safety Inspection Certificate</label>
                                <input type="file" id="myfile" name="fireSafetyFile">
                            </div>
                            <div class="field-wrap">
                                <p>Upload File of &quot;Other Document/s if required by law&quot; in PDF (.pdf) File
                                    Format (optional, if required)</p>
                                <label for="myfile">&quot;Other Document/slabel>
                                    <input type="file" id="myfile" name="otherFile">
                            </div>

                            <div class="verifyBtn">
                                <a href="{{ url('#') }}"><button class="continueBtn">Submit</button></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="contain">
                <div class="row1">
                    <div class="footer-col">
                        <h4>Our location</h4>
                        <ul>
                            <li><a href="#">talamban</a></li>
                            <li><a href="#">banilad</a></li>
                            <li><a href="#">mandaue</a></li>
                            <li><a href="#">cabancalan</a></li>
                            <li><a href="#">cebu</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>quick links</h4>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="sci-fi.html">services</a></li>
                            <li><a href="bestsellers.html">about</a></li>
                            <li><a href="cart.html">account</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Keep in touch</h4>
                        <ul>
                            <li><a href="#">+(63)955 480 0304</a></li>
                            <li><a href="#">+123 - 345 - 567</a></li>
                            <li><a href="#">https://www.cebucity.gov.ph/</a></li>
                            <img src="./image/map.png" class="map" alt="">

                        </ul>
                    </div>
                </div>
                <div class="connect">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/login" target="blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="valid.js"></script>
</body>

</html>
