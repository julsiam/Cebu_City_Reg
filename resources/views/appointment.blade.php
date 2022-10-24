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
                    <a href="#">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>

                <li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/staffHome') }}">
                                <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i> </span>
                                <span class="title">Back to Dashboard</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i> </span>
                                <span class="title">Sign In</span>
                            </a>
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            {{-- <div class="landingbtn">
                                <a href="{{ route('login') }}"> <button class="signinBtn">Login</button></a>
                            </div> --}}
                        @endif

                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" style="color: white; font-weight:600"
                                aria-expanded="false" v-pre>
                                <span style="font-family: 'Courier New', Courier, monospace">
                                    Welcome,{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                {{-- <a style="color: #314964; font-weight:600" class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a> --}}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        <section>
            <div class="form">
                <div class="tab-content">
                    <div id="signup">
                        <h1><span style="color:#314964">|<b>Appointment Form</b></h1>
                        <form method="post" action="{{ url('addAppointment') }}">
                            <!--sa web ni makita nga url,sa route-->
                            {{ csrf_field() }} <br>
                            <h3>Your Information</h3>
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
                                    Email Address<span class="req">*</span>
                                </label>
                                <input name="email" type="email" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" pattern="[0-9]{11}" placeholder="09123456789"
                                    name="phone" requiredautocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Address<span class="req">*</span>
                                </label>
                                <select name="address" id="Address" required autocomplete="off">
                                    <option value="">-Address-</option>
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
                                <h3>First Time Visit?</h3>
                                <select name="visitOften" id="First Time Visit" required autocomplete="off">
                                    <option value=""> -First Time Visit-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <h3>Appointment Details</h3> <br>
                            <div class="field-wrap">
                                <label>
                                    Appointment Subject:<span class="req">*</span>
                                </label>
                                <input name="appointmentSubject" id="Appointment Subject" type="text" required
                                    autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Set Appointment Date:<span class="req">*</span>
                                </label>
                                <input name="appointmenttDate" id="Date of Appointment" type="date" required
                                    autocomplete="off">
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Most Preferred Time:<span class="req"></span>
                                </label>
                                <input name="mostPrefTime" id="Most Prefered Time" type="time" id="appt"
                                    name="appt" required autocomplete="off">
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Less Preferred Time:<span class="req"></span>
                                </label>
                                <input name="lessPrefTime" id="Less Prefered Time" type="time" id="appt"
                                    name="appt" required autocomplete="off">
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
