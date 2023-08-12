<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Blog Website</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('themes/css/responsive.css') }}" rel="stylesheet" />
</head>

<body @if($_SERVER['REQUEST_URI'] != '/')  class="sub_page" @endif>
<div class="hero_area">
    @yield('header')

    @yield('slider')
</div>

@yield('about')

<div class="body_bg layout_padding">
    @yield("content")
</div>

@yield("info_contact_us")

@yield("footer")

<script type="text/javascript" src="{{ asset('themes/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/bootstrap.js') }}"></script>

</body>

</html>
