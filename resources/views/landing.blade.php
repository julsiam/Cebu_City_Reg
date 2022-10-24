<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/cf7a571938.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('image/Cebu Seal.png') }}">
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}" />
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
                    <a href="#main">
                        <span class="icon"><i class="fa-solid fa-house" aria-hidden="true"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#services">
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

    <div class="main" id="main">
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
                        @endif

                         {{-- KANI DIRI AH, IUNCOMMENT NI SIYA ONCE NAAY MUREGISTER NGA STAFF BAG-O,  --}}


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


        <header>
            <div class="intro">
                <h1 class="intro_title"> Cebu City Registration Services</h1> <br>
                <p> Living with its commitment and service for the Cebuano, the <strong class="cityName"> Cebu City Registration System
                    </strong> is made for the procurement of important document in convenient way. 
                    </p>
            </div>

            <section id="services" class="page-contain">

                <a href="{{ url('/birthCert') }}" class="data-card">
                    <h3><img style="width:120px" src="image/birth.png" alt=""></h3>
                    <h4>Birth Certificate</h4>
                    <p>PSA Birth Certificate online application around Cebu. Open 24/7. Fast, easy, and
                        secure. With status updates.</p>
                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/marriageCert') }}" class="data-card">
                    <h3><img style="width:120px" src="image/marriage.png" alt=""></h3>
                    <h4>Marriage Certificate</h4>
                    <p>Marriage Certificate online application around cebu. Open 24/7. Fast, easy, and
                        secure. With status updates.</p>
                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/cenomar') }}" class="data-card">
                    <h3><img style="width:120px" src="image/cenomar.png" alt=""></h3>
                    <h4>CENOMAR</h4>
                    <p>CENOMAR online application around cebu. Open 24/7. Fast, easy, and
                        secure. With status updates.</p>
                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>


                <a href="{{ url('/deathCertWho') }}" class="data-card">
                    <h3><img style="width:120px" src="image/death.png" alt=""></h3>
                    <h4>Death Certificate</h4>
                    <p>Death Certificate online application around cebu. Open 24/7. Fast, easy, and
                        secure. With status updates.</p>

                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/scholarship') }}" class="data-card">
                    <h3><img style="width:120px" src="image/scholarship.png" alt=""></h3>
                    <h4>Scholarship</h4>
                    <p>The governement is offering scholarship for its students. This is a big opportunity for you to avail</p>
                    <span class="link-text">
                        Apply
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/permit') }}" class="data-card">
                    <h3><img style="width:120px" src="image/permit.png" alt=""></h3>
                    <h4>Business permit</h4>
                    <p>Business Permit online application around cebu. Open 24/7. Fast, easy, and
                        secure. With status updates.</p>
                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/appointment') }}" class="data-card">
                    <h3><img style="width:120px" src="image/appointment.png" alt=""></h3>
                    <h4>Appointment</h4>
                    <p>Have an appointment with any of your concerns. Just wait for the confirmation before hand.</p>
                    <span class="link-text">
                        Book
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

                <a href="{{ url('/suggestion') }}" class="data-card">
                    <h3><img style="width:120px" src="image/suggestions.png" alt=""></h3>
                    <h4>Suggestions</h4>
                    <p>Let your words be heard. We are glad to hear from you. What's on your mind?</p>
                    <span class="link-text">
                        Register
                        <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                                fill="#314964" />
                        </svg>
                    </span>
                </a>

            </section>
        </header>

        <footer class="footer">
            <div class="contain">
                <div class="row1">
                    <!-- <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="cart.html">shopnow</a></li>
                            <li><a href="">privacy policy</a></li>
                        </ul>
                    </div> -->
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
                            {{-- <img src="./image/map.png" class="map" alt=""> --}}

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
</body>

</html>
