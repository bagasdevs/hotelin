<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> {{ isset($title) ? $title.' | '.config('app.name') : config('app.name') }} </title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/adminlte/assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/adminlte/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/fontawesome/css/all.min.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/lightbox/dist/css/lightbox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/adminlte/assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/adminlte/style.css">
</head>

<body class="home">
    <div id="page" class="full-page">

        @include('layouts.inc_tamu.navbar')

        @yield('content')

        @include('layouts.inc_tamu.footer')

        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <!-- JavaScript -->
    <script src="/adminlte/assets/js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="/adminlte/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/adminlte/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/adminlte/assets/js/jquery.counterup.js"></script>
    <script src="/adminlte/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="/adminlte/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
    <script src="/adminlte/assets/vendors/slick/slick.min.js"></script>
    <script src="/adminlte/assets/js/jquery.slicknav.js"></script>
    <script src="/adminlte/assets/js/custom.min.js"></script>
</body>

</html>
