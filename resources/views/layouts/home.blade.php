<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $page_title or 'Quick LMS' }}</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!-- <link href="/css/shop-homepage.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="/styles/course.css">
    <link rel="stylesheet" type="text/css" href="/styles/course_responsive.css">

    <!-- Plugins -->
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Header -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="#">
                                <div class="logo_text">COC</div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>



                        <!-- Hamburger -->



                        <div class="col-lg-7 text-right" style="padding-top: 10px">
                            @if (Auth::check())
                            <div style="color:white">
                                Logged in as {{ Auth::user()->email }}
                                <form action="{{ route('auth.logout') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Logout" class="btn btn-info">
                                </form>
                            </div>
                            @else
                            <form action="{{ route('auth.login') }}" method="post">
                                {{ csrf_field() }}
                                <input type="email" name="email" placeholder="Email" />
                                <input type="password" name="password" placeholder="Password" />
                                <input type="submit" value="Login" class="btn btn-info">
                            </form>
                            @endif
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Of Header -->

    <!-- Menu -->
    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="/">Home</a></li>
                <li class="menu_mm"><a href="courses.html">Courses</a></li>
                <li class="menu_mm"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_phone"><span class="menu_title">phone:</span>09 111111111</div>
            <div class="menu_social">
                <span class="menu_title">follow us</span>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Menu -->

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">

                @yield('sidebar')

            </div>

            <div class="col-md-12">

                <div class="row">

                    @yield('main')

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Trigon 2020</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="/js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->

    <!-- King's JS -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/plugins/progressbar/progressbar.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/course.js"></script>
</body>

</html>
