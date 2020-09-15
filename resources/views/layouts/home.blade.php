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
    <link rel="stylesheet" type="text/css" href="/styles/coursepage.css">

    <!-- Plugins -->
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

{{-- <script id="5f526247fafe191fb649fdee" src="https://dashboard.chatfuel.com/integration/fb-entry-point.js" async defer></script> --}}

    <!-- Header -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="#">
                                <div class="logo_text"><img src="{{ asset('images/Zhuxin_logo.png') }}" width="200px"></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="{{ route('courses.view') }}">Courses</a></li>
                                <li>
                                    @if (Auth::check())

                                    <a>
                                        <form action="{{ route('auth.logout') }}" method="post">
                                            {!! csrf_field() !!}
                                            <input type="submit" value="Logout" class="btn btn-auth">
                                        </form>
                                    </a>


                                    @else
                                    <a href="" data-toggle="modal" data-target="#modalLoginForm">Login</a>
                                    @endif
                                </li>
                            </ul>
                        </nav>


                        -
                        <!-- Hamburger -->



                        <!-- <div class="col-lg-7 text-right" style="padding-top: 10px">
                            @if (Auth::check())
                            <div style="color:black">
                                Logged in as {{ Auth::user()->email }}
                                your id is {{ Auth::user()->id }}
                                <form action="{{ route('auth.logout') }}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="submit" value="Logout" class="btn btn-info">
                                </form>
                            </div>
                            @else
                            <form action="{{ route('auth.login') }}" method="post">
                                {!! csrf_field() !!}
                                <input type="email" name="email" placeholder="Email" />
                                <input type="password" name="password" placeholder="Password" />
                                <input type="submit" value="Login" class="btn btn-info">
                            </form>
                            @endif
                        </div>-->

                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form action="{{ route('auth.login') }}" method="post">
            {!! csrf_field() !!}
            <div class="modal-dialog" role="document">
                <div class="modal-content"><br><br><br><br><br>
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold"
                            style="background: #97CA57;"
                        >Be part of Zhuxin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="email" name="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                        </div>

                        <div class="md-form mb-4">
                            <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" value="Login" class="btn btn-default">
                    </div>
                </div>
            </div>
        </form>
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
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="/">Home</a></li>
                <li class="menu_mm"><a href="{{ route('courses.view') }}">Courses</a></li>
                @if (Auth::check())

                <form action="{{ route('auth.logout') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="submit" value="Logout" class="btn btn-info">
                </form>
                @else
                <li><a href="" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>
                @endif
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168010158-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168010158-2');

    </script>

</body>

</html>
