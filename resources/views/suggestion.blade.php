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
                               <span style="font-family: 'Courier New', Courier, monospace"> Welcome,{{ Auth::user()->name }}</span>
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
                        <h1><span style="color:#314964">|<b>Grievance/Suggestion Form</b></h1>
                        <h4 class="note">We value your suggestions, we appreciate you taking the time to share your
                            thoughts. What’s Your Suggestion?</h4>

                        <form method="post" action="{{ url('addSuggestions') }}">
                            {{ csrf_field() }} <br>
                            <h3>Your Information</h3>
                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name
                                    </label>
                                    <input type="text" name="fname" id="First Name" />
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Middle Name
                                    </label>
                                    <input name="mname" id="Middle Name" type="text" />
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Last Name
                                    </label>
                                    <input type="text" name="lname" id="Last Name" />

                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Email Address
                                </label>
                                <input name="email" type="email" />
                            </div>

                            <h3>Type of Suggestion</h3>
                            <div class="field-wrap">
                                <label>
                                    Type of Suggestion<span class="req">*</span>
                                </label>
                                <textarea name="suggestionType" id="Type of Suggestion" rows="2" cols="50"></textarea>
                            </div>

                            <h3> Details</h3>
                            <div class="field-wrap">
                                <label>
                                    Please give as much detail as you can and share examples if you have any:<span
                                        class="req"></span>
                                </label>
                                <textarea name="suggestionDetails" id="Suggestion Details" rows="10" cols="50"></textarea>
                            </div>

                            <div class="verifyBtn">
                                <button class="continueBtn">Submit</button></a>
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
