<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/cf7a571938.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('image/Cebu Seal.png') }}">
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/birthCert.css') }}" />
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
            <div class="search">
                <label>
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search here...">
                </label>
            </div>
            <!-- //stop from here -->
            <div class="landingbtn">
                {{-- @if (Route::has('login')) --}}
                <a href="#"> <button class="signinBtn">Sign in</button></a>
                <a href="{{ url('/Register') }}"><button class="signupBtn">Sign Up</button></a>

            </div>
        </div>

        <section>
            <div>
                <h1 class="intro_title">Request for Your <span style="font-weight:600"> Mother's Death Certificate</span></h1>
            </div>
            <div class="instruct">To request for a copy of the
                death certificate of your Mother, we will need to ask you the following information...<br> <br>
                <div class="details">1. Your name, sex, birthday, and valid government-issued ID</div>
                <div class="details">2. Your mother's name</div>
                <div class="details">3. The date when she passed away</div>
                <div class="details">4. The place where she passed away</div>
                <div class="details">5. Late registration (if applicable)</div>
                <div class="details">6. The purpose of your request</div>
                <div class="details">6. Legal proceedings (if applicable)</div>
            </div>
            <a href="{{ url('/motherDeathForm') }}"><button class="continueBtn">Continue</button></a>

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
