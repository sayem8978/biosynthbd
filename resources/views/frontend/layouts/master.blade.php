<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Biosynthbd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('ui/frontend') }}/images/favicon.html">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/bootstrap.min.css">

    <!-- ICONS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/ilmosys-icon.css">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/js/vendors/swipebox/css/swipebox.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/js/vendors/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/style.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<body class="">
    @include('frontend.layouts.header')
    
    @yield('content')
    
    
    @include('frontend.layouts.footer')
    
    <script src="{{ asset('ui/frontend') }}/js/jquery.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/slick/slick.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/jquery.easing.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/stellar.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/isotope/isotope.pkgd.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/main.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/mc/jquery.ketchup.all.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/vendors/mc/main.js"></script>
    
</body>
</html>
