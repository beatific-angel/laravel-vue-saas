<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name') }}</title>

<!-- Favicon -->
<link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">

<!-- Bootstrap 4.1.3 -->
<link rel="stylesheet" href="{{ asset('saas/css/bootstrap.min.css') }}">
<!-- Animate Css -->
<link rel="stylesheet" href="{{ asset('saas/css/plugins/animate.css') }}">
<!-- Google Font -->
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
    rel="stylesheet">
<!-- Font Awesome -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
    rel="stylesheet">
<!-- Slick Slider -->
<link rel="stylesheet" href="{{ asset('saas/css/plugins/slick.css') }}">
<link rel="stylesheet" href="{{ asset('saas/css/plugins/slick-theme.css') }}">          
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('saas/css/plugins/magnific-popup.css') }}">
<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('saas/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('saas/css/custom.css') }}">
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

@yield('styles')