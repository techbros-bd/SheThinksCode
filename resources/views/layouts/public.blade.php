<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{config('app.name')}} {{(isset($pageTitle) && $pageTitle) ? "- $pageTitle" : ""}}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    {{--
        #64b5f6 -> Primary
        #e3f2fd -> Secondary
    --}}
    <!-- Favicons -->
    <link href="{{asset("img/favicon.png")}}" rel="icon">
    <link href="{{asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/remixicon/remixicon.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/animate.css/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/aos/aos.css")}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    @stack('style')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="/">{{config("app.name")}}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{ (Request::path() == '')         ? 'active' : null}}"><a href="/">Home</a></li>
                    <li class="{{ (Request::path() == 'team')     ? 'active' : null}}"><a href="/team">Our Team</a></li>
                    <li class="{{ (Request::path() == 'events')   ? 'active' : null}}"><a href="/events">Upcoming
                            Events</a></li>
                    <li class="{{ (Request::path() == 'programs') ? 'active' : null}}"><a href="/programs">Successful
                            Programs</a></li>
                    <li class="{{ (Request::path() == 'faq')      ? 'active' : null}}"><a href="/faq">FAQ</a></li>
                    <li class="{{ (Request::path() == 'contact')  ? 'active' : null}}"><a href="/contact">Contact Us</a>
                    </li>
                    <li class="{{ (Request::path() == 'blog')     ? 'active' : null}}"><a href="/blog">Blog</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="join-us" class="get-started-btn">Join Us</a>

        </div>
    </header><!-- End Header -->
    @stack('hero')
    <main id="main">
        @include('inc.alerts')
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 footer-contact">
                        <h3>{{config('app.name')}}</h3>
                        <p>
                            {!! settings('address') !!}<br>
                            <strong>Phone:</strong> {{settings('phone')}}<br>
                            <strong>Email:</strong> {{settings('email')}}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/sitemap">Sitemap</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/faq">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>{{Session::get('subscribeMsg') ?? "Enter your email to get important updates delivered to your inbox!"}}
                        </p>
                        <form action="/subscribe" method="post" id="subscribe">
                            @csrf
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright {{date("Y")}} <strong><span>{{config('app.name')}}</span></strong>. All Rights
                    Reserved.
                </div>
                <div class="credits">
                    Powered by <a href="https://shawon.xyz/">Sharfuddin Shawon</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="{{settings('twitter.link')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{settings('facebook.link')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{settings('instagram.link')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{settings('linkedin.link')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("vendor/jquery.easing/jquery.easing.min.js")}}"></script>
    <script src="{{asset("vendor/php-email-form/validate.js")}}"></script>
    <script src="{{asset("vendor/waypoints/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("vendor/counterup/counterup.min.js")}}"></script>
    <script src="{{asset("vendor/owl.carousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("vendor/aos/aos.js")}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset("js/main.js")}}"></script>
    @stack('js')

</body>

</html>
