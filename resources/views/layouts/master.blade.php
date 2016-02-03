<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>STI Blog</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Files -->

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/socials.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/simpletextrotator.css" />
    <link rel="stylesheet" href="css/cubeportfolio.min.css" />
    <link rel="stylesheet" href="css/timeline.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/settings-ie8.css" />
    <link rel="stylesheet" href="css/settings.css" />
    <link rel="stylesheet" href="js/gritter/css/jquery.gritter.css" />
    <!-- Page Styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/backgrounds.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- End Page Styles -->

    <!-- Page Layout Color, night or dark -->
    <link id="changeable_tone" rel="stylesheet" href="css/page_tones/dark.css" />
    <!-- End Page Layout Color -->

    <!-- Page Elements Color -->
    <link id="changeable_color" rel="stylesheet" href="css/colors/red.css" />
    <!-- End Page Elements Color -->

    <!-- Page Fonts / Pacifico-->
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Raleway-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,,200,300,600,700' rel='stylesheet' type='text/css'>

    <!-- End CSS Files -->

</head>

<!-- Body Start -->
<body class="parallax">

    @include('sections.page-loader')

    @include('sections.page-top')

    @include('sections.navigation')

    @include('sections.header', ['image' => '49'])

    <section id="content">
        @yield('content')
    </section>

    @include('sections.footer')

    <!-- JS Files -->
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/waypoint.js"></script>
    <script type="text/javascript" src="js/modernizr-latest.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.superslides.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
    <script type="text/javascript" src="js/jquery.cubeportfolio.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="js/gritter/js/jquery.gritter.js"></script>
    <!-- Revolution Slider -->
    <script type="text/javascript" src="js/rev_slider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/rev_slider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/rev_slider/rev_plugins.js"></script>
    <!-- Contact Form -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/contact-form.js"></script>
    <!-- Twitter -->
    <script type="text/javascript" src="js/tweecool.min.js"></script>
    <script type="text/javascript" src="js/tweecool.js"></script>
    <!-- Page Plugins -->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Portfolio Plugins -->
    <script type="text/javascript" src="js/masonry-blog.js"></script>
    <!-- End JS Files -->

    <script>
        $(document).ready(function() {
            $('#latest_tweets').tweecool({
                username : 'envato'
            });
        });
    </script>

    <!-- GRITTER -->
    @if (count($errors) > 0)
        <script>
            @foreach ($errors->all() as $error)
                $.gritter.add({
                    title: 'Something went wrong!',
                    text: '{{ $error }}'
                });
                console.log('error');
            @endforeach
        </script>
    @endif

</body>
<!-- Body End -->
</html>