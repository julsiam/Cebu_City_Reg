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
        </div>

        <section>
            <div class="form">
                <div class="tab-content">
                    <div id="signup">
                        <h1><span style="color:#314964">| <b> Certificate of Live Birth</b></h1>
                        <h3>Your Information</h3>
                        <form method="post" action="{{url('addBirth')}}"> <!--sa web ni makita nga url,sa route-->
                            {{ csrf_field() }}
                            <div class="field-wrap">
                                <label for="sex" id="sex">
                                    Your Sex<span class="req">*</span>
                                </label>
                                <select name="sex" id="Sex" required autocomplete="off">
                                    <option value="">-SEX-</option>
                                    <option value="Male">MALE</option>
                                    <option value="Female">FEMALE</option>
                                </select>
                            </div>


                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input name="fname" id="First Name" minlength="2" maxlength="25" name="fname"
                                        type="text" required autocomplete="off" />

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
                                    <input name="lname" id="Last Name" minlength="2" maxlength="25" type="text"
                                        required autocomplete="off" />

                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Birthdate<span class="req">*</span>
                                </label>
                                <input name="birthdate" id="Birthdate" type="date" required autocomplete="off">
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Place of Birth<span class="req">*</span>
                                </label>
                                <select name="birthplace" id="Place of Birth" required autocomplete="off">
                                    <option value="">-Place of Birth-</option>
                                    <option value="Boljoon Cebu Province">BOLJOON CEBU PROVINCE</option>
                                    <option value="Car-Car Cebu Province">CAR-CAR CEBU PROVINCE</option>
                                    <option value="Toledo Cebu Province">TOLEDO CEBU PROVINCE</option>
                                    <option value="Talisay Cebu Province">TALISAY CEBU PROVINCE</option>
                                    <option value="Talamban Cebu Province">TALAMBAN CEBU PROVINCE</option>
                                    <option value="Lapu-Lapu Cebu Province">LAPU-LAPU CEBU PROVINCE</option>
                                    <option value="Argao Cebu Province">ARGAO CEBU PROVINCE</option>
                                    <option value="Bogo Cebu Province">BOGO CEBU PROVINCE</option>
                                    <option value="Dalaguete Cebu Province">DALAGUETE CEBU PROVINCE</option>
                                    <option value="Minglanilla Cebu Province"> MINGLANILLA CEBU PROVINCE</option>
                                    <option value="Medellin Cebu Province">MEDELLIN CEBU PROVINCE</option>
                                    <option value="Consolacion Cebu Province"> CONSOLACION CEBU PROVINCE</option>
                                    <option value="Danao Cebu Province">DANAO CEBU PROVINCE</option>
                                    <option value="Mandaue Cebu Province">MANDAUE CEBU PROVINCE</option>
                                    <option value="Naga Cebu Province">NAGA CEBU PROVINCE</option>
                                    <option value="Sibonga Cebu Province">SIBONGA CEBU PROVINCE</option>
                                    <option value="San Fernando Cebu Province">SAN FERNANDO CEBU PROVINCE</option>
                                    <option value="Cordova Cebu Province">CORDOVA CEBU PROVINCE</option>
                                    <option value="Alcoy Cebu Province">ALCOY CEBU PROVINCE</option>
                                    <option value="Oslob Cebu Province">OSLOB CEBU PROVINCE</option>
                                    <option value="Santander Cebu Province">SANTANDER CEBU PROVINCE</option>
                                    <option value="Compostela Cebu Province">COMPOSTELA CEBU PROVINCE</option>
                                    <option value=" Bantayan Cebu Province">BANTAYAN CEBU PROVINCE</option>
                                    <option value=" Ginatilan Cebu Province">GINATILAN CEBU PROVINCE</option>
                                    <option value="Alegria Cebu Province">ALEGRIA CEBU PROVINCE</option>
                                    <option value="Catmon Cebu Province">CATMON CEBU PROVINCE</option>
                                    <option value="Balamban Cebu Province">BALAMBAN CEBU PROVINCE</option>
                                    <option value="Moalboal Cebu Province">MOALBOAL CEBU PROVINCE</option>
                                    <option value="Alcantara Cebu Province">ALCANTARA CEBU PROVINCE</option>
                                    <option value="Daan-Bantayan Cebu Province"> DAAN-BANTAYAN CEBU PROVINCE</option>
                                    <option value="Samboan Cebu Province">SAMBOAN CEBU PROVINCE</option>
                                    <option value="Dumanjug Cebu Province">DUMANJUG CEBU PROVINCE</option>
                                    <option value="Pinamungajan Cebu Province"> PINAMUNGAJAN CEBU PROVINCE</option>
                                    <option value="Tabugon Cebu Province">TABUGON CEBU PROVINCE</option>
                                    <option value="Tabuelan Cebu Province">TABUELAN CEBU PROVINCE</option>
                                    <option value="Ronda Cebu Province">RONDA CEBU PROVINCE</option>
                                    <option value="Borbon Cebu Province">BORBON CEBU PROVINCE</option>
                                    <option value="Tudela Cebu Province">TUDELA CEBU PROVINCE</option>
                                    <option value="Bdian Cebu Province">BADIAN CEBU PROVINCE</option>
                                    <option value="Poro Cebu Province">PORO CEBU PROVINCE</option>
                                    <option value="Malabuyoc Cebu Province">MALABUYOC CEBU PROVINCE</option>
                                    <option value="Aloguinsan Cebu Province">ALOGUINSAN CEBU PROVINCE</option>
                                    <option value="Asturias Cebu Province">ASTURIAS CEBU PROVINCE</option>
                                    <option value="Ozamiz Cebu Province">OZAMIZ CEBU PROVINCE</option>
                                    <option value="Sogod Cebu Province">SOGOD CEBU PROVINCE</option>
                                    <option value="Barili Cebu Province">BARILI CEBU PROVINCE</option>
                                    <option value="San Francisco Cebu Province">SAN FRANCISCO CEBU PROVINCE</option>
                                    <option value="Madridejos Cebu Province">MADRIDEJOS CEBU PROVINCE</option>
                                </select>
                            </div><br>

                            <div class="field-wrap">
                                <label for="" id="label-sex">
                                    Your Government-Issued ID Type <span class="req">*</span>
                                </label>
                                <select name="idtype" id="Government Issued ID" required autocomplete="off">
                                    <option value="">-SELECT ID TYPE-</option>
                                    <option value="Driver’s License issued by the Land Transportation Office"> Driver’s
                                        License
                                        issued by the Land Transportation Office
                                        (LTO)</option>
                                    <option value="Philippine National Police (PNP) ID/Police Clearance"> Philippine
                                        National
                                        Police (PNP) ID/Police Clearance
                                    </option>
                                    <option
                                        value="Department of Social Welfare and Development (DSWD) Certification/4Ps ID ">
                                        Department of Social Welfare and Development (DSWD)
                                        Certification/4Ps ID </option>
                                    <option value="Barangay ID/Certification with picture and signature"> Barangay
                                        ID/Certification with picture and signature </option>
                                    <option
                                        value="Person with Disability(PWD) ID issued by the National Council on Disability Affairs(NCDA) OR it’s regional counterpart, Office of the Mayor, Office of the Barangay Captain,DSWD Office ">
                                        Person with Disability(PWD) ID issued by the National Council on Disability
                                        Affairs(NCDA) OR it’s regional counterpart, Office of the Mayor, Office of the
                                        Barangay Captain,DSWD Office </option>
                                    <option
                                        value="IDs issued by National Government Offices (e.g., AFP, DAR, DENR,DOH,DOJ) including Government Owned and Controlled Operations">
                                        IDs issued by National Government Offices (e.g., AFP, DAR, DENR,DOH,DOJ)
                                        including Government Owned and Controlled Operations</option>

                                    <option
                                        value="IDs issued by the Offices of the Local Chief Executives(Governor, ViceGovernor, Mayor, ViceMayor ">
                                        IDs issued by the Offices of the Local Chief Executives(Governor, ViceGovernor,
                                        Mayor, ViceMayor </option>
                                    <option
                                        value="Tax Identification Card (TIN) with a picture and signature issued by the Bureau Internal Revenue">
                                        Tax Identification Card (TIN) with a picture and signature issued by the Bureau
                                        of Internal Revenue
                                    </option>
                                    <option
                                        value="School/Student ID for currently-enrolled students, 18 years old and above, issued by reputable schools/college/universities recognized by the Department of Education">
                                        School/Student ID for currently-enrolled students, 18 years old and above,
                                        issued by reputable schools/college/universities recognized by the Department of
                                        Education</option>
                                    <option value="Barangay ID/Certification with picture and signature"> Barangay
                                        ID/Certification with picture and signature </option>
                                    <option
                                        value="Company IDs issued by private entities or institutions registered with,  supervised or regulated by Bangkong Sentral ng  Pilipinas(BSP), Security Exchange and Commission(SEC)">
                                        Company IDs issued by private entities or institutions registered with,
                                        supervised or regulated by Bangkong Sentral ng Pilipinas(BSP), Security Exchange
                                        and Commission(SEC)</option>
                                    <option
                                        value="Company IDs issued by private entities or institutions registered with,  supervised or regulated by Bangkong Sentral ng  Pilipinas(BSP), Security Exchange and Commission(SEC)">
                                        Social Security System (SSS) Unified Multi-Purpose ID
                                    </option>
                                </select>
                            </div>

                            <h3>Your Father's Name</h3>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input name="ffname" id="Father First Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Middle Name<span class="req"></span>
                                    </label>
                                    <input name="fmname" id="Father Middle Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input name="flname" id="Father Last Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>
                            </div>

                            <h3>Your Mother's Maiden Name</h3>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input name="mfname" id="Mother First Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Middle Name<span class="req"></span>
                                    </label>
                                    <input name="mmname" id="Mother Middle Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input name="mlname" id="Mother Last Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>
                            </div>

                            <div class="field-wrap">
                                <h3>Late Registration</h3>
                                <p class="note">The certificate you are requesting for may not be digitized yet by
                                    the PSA if it was
                                    registered late. There is a chance that you will receive a Certificate of Negative
                                    Intact if you continue.
                                </p>
                                <select name="lateReg" id="Late Registration" required autocomplete="off">
                                    <option value=""> -Was the certificate registered late?-</option>
                                    <option value="Yes">Yes, it was registered late</option>
                                    <option value="No">No, it was registered on-time</option>
                                </select>

                            </div>

                            <h3>The Purpose of Your Request...</h3>
                            <div class="field-wrap">
                                <select name="purpose" id="Purpose of Request" required autocomplete="off">
                                    <option value="">-Purpose-</option>
                                    <option value="Passport / Travel">Passport / Travel</option>
                                    <option value="School Requirement">School Requirement</option>
                                    <option value="Local Employment">Local Employment</option>
                                    <option value="Foreign Employment">Foreign Employment</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Claims / Benefits / Loans">Claims / Benefits / Loans</option>
                                    <option value="Late Registration">Late Registration</option>
                                </select>
                            </div> <br>

                            <h3>Additional Information</h3>
                            <div class="field-wrap">
                                <p class="note">Please provide your Mobile Number for the update of your request.</p>
                                <label for="phone">Tel/Mobile Number<span class="req">*</span></label>
                                <input type="tel" id="phone" pattern="[0-9]{11}" placeholder="09123456789" name="phone" requiredautocomplete="off" />
                            </div>

                            <div class="verifyBtn">
                                <a href="{{}}"><button class="continueBtn">Submit</button></a>
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
