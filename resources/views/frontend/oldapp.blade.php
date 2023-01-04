<!DOCTYPE html>
<html lang="en">
    <head>

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
    
    
        <!-- THEME / PLUGIN CSS -->
        <link rel="stylesheet" href="{{ asset('ui/frontend') }}/js/vendors/slick/slick.css">
        <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/style.css">
        @stack('css')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    </head>
<body>
    
    @yield('content')
    
    
    @include('frontend.elements.nav')
    @include('frontend.about')
</body>
</html>

