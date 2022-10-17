<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/cf7a571938.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('image/Cebu Seal.png') }}">
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/birthForm.css') }}" />
    <title>Cebu Registration</title>

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
                        <h1><span style="color:#314964">| <b> Scholarship Application Form</b> </span></h1>
                        <h3>Personal Information</h3>
                        <form method="post" action="{{ url('addScholarship') }}">
                            <!--sa web ni makita nga url,sa route-->
                            {{ csrf_field() }}

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

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Birthdate<span class="req">*</span>
                                    </label>
                                    <input name="birthDate" id="Birthdate" type="date" required autocomplete="off">
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Place of Birth<span class="req">*</span>
                                    </label>
                                    <input name="birthPlace" id="Place of Birth" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>

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
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Civil Status<span class="req"></span>
                                    </label>
                                    <input name="civilStatus" id="Civil Status" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Citizenship<span class="req">*</span>
                                    </label>
                                    <input name="citizenship" id="Citizenship" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label for="phone">Tel/Mobile Number<span class="req">*</span></label>
                                    <input type="text" id="phone" name="phone" requiredautocomplete="off" />
                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input name="email" type="email" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Present Address<span class="req">*</span>
                                    </label>
                                    <select name="presentAdd" id="Place of Birth" required autocomplete="off">
                                        <option value="">-Present Address-</option>
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
                                        <option value="Daan-Bantayan Cebu Province"> DAAN-BANTAYAN CEBU PROVINCE
                                        </option>
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
                                        <option value="San Francisco Cebu Province">SAN FRANCISCO CEBU PROVINCE
                                        </option>
                                        <option value="Madridejos Cebu Province">MADRIDEJOS CEBU PROVINCE</option>
                                    </select>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        ZIP Code<span class="req">*</span>
                                    </label>
                                    <input name="zipCode" id="ZIP Code" type="number" required
                                        autocomplete="off" />
                                </div>
                            </div>


                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        School Sector<span class="req">*</span>
                                    </label>
                                    <input name="schoolSector" id="School Sector" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        School Last Attende<span class="req">*</span>
                                    </label>
                                    <input name="schoolLastAttendee" id="Spouse Middle Name" minlength="2"
                                        maxlength="25" type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        School Address<span class="req">*</span>
                                    </label>
                                    <input name="schoolAdd" id="School Address" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>
                            </div>

                            <h3>Family Background</h3> <br>
                            <h4>Your Father's Name</h4>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Full Name<span class="req">*</span>
                                    </label>
                                    <input name="ffname" id="Father Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Address<span class="req"></span>
                                    </label>
                                    <input name="fatherAddress" id="Father Address" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <label for="phone">Tel/Mobile Number<span class="req">*</span></label>
                                    <input type="text" id="phone" name="fatherPhone" requiredautocomplete="off" />
                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Occupation<span class="req">*</span>
                                    </label>
                                    <input name="fatherOccupation" id="Father Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Name of Employer<span class="req"></span>
                                    </label>
                                    <input name="fatherEmployer" id="Employeer" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Employeer Address<span class="req"></span>
                                    </label>
                                    <input name="fatherEmployerAdd" id="Employer Address" minlength="2"
                                        maxlength="25" type="text" required autocomplete="off" />
                                </div>

                            </div>

                            <div class="field-wrap">
                                <label>
                                    Highest Educational Attainment
                                </label>
                                <input name="fatherEdu" type="text" required autocomplete="off" />
                            </div>

                            <h4>Your Mother's Name</h4>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Full Name<span class="req">*</span>
                                    </label>
                                    <input name="mfname" id="Mother Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Address<span class="req"></span>
                                    </label>
                                    <input name="motherAdd" id="Mother Address" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <input type="text" id="phone" name="motherPhone" requiredautocomplete="off" />
                                </div>
                            </div>

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        Occupation<span class="req">*</span>
                                    </label>
                                    <input name="motherOccupation" id="Father Name" minlength="2" maxlength="25"
                                        type="text" required autocomplete="off" />

                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Name of Employer<span class="req"></span>
                                    </label>
                                    <input name="motherEmployer" id="Employeer" minlength="2" maxlength="25"
                                        type="text" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Employer Address<span class="req"></span>
                                    </label>
                                    <input name="motherEmployerAdd" id="Employer Address" type="text" />
                                </div>

                            </div>

                            <div class="field-wrap">
                                <label>
                                    Highest Educational Attainment
                                </label>
                                <input name="motherEdu" id="Employer Address" minlength="2" maxlength="25"
                                    type="text" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label for="quantity">No. of siblings in the family 18 years old and below:</label>
                                <input type="number" id="Total Number of Siblings" name="siblings">
                            </div>

                            <div class="field-wrap">
                                <h3>Is your family a beneficiary of the DSWD Pantawid Pamilyang Pilipino Program (4P’s)?
                                </h3>
                                <select name="pantawidMember" id="4P Member" required autocomplete="off">
                                    <option value=""> -Choose-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <h3>Documentary Requirements</h3> <br>
                            <h4>Academic Requirements – any of the following:</h4>
                            <div class="field-wrap">
                                <p class="note">1. High school report card<br>
                                    2. Duly certified true copy of grades for Grade 11 or 1 st
                                    semester of Grade 12 for graduating high schoolstudents.
                                    <input type="file" id="Report Card" name="academicFile">
                                </p>
                            </div>

                            <h4>Income Requirements – any of the following:</h4>
                            <div class="field-wrap">
                                <p class="note">1. Latest ITR of parents or guardian if employed <br>
                                    2. Certificate of Tax Exemption from the BIR <br>
                                    3. Certificate of Indigency from their Barangay <br>
                                    4. Certificate/ Case study from DSWD <br>
                                    5. Latest copy of contract or proof income for children of Overseas Filipino workers
                                    (OFW) and seafarers.<br>
                                    <input type="file" id="Report Card" name="incomeFile">
                                </p>
                            </div>


                            <div class="verifyBtn">
                                <button class="continueBtn">Submit</button>
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

</body>

</html>
