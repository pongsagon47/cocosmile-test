<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,200,100,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--Bootstrap-->
    <link type="text/css" rel="stylesheet" href="{{ asset('cocosmile/css/bootstrap.min.css') }}"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"  media="screen"/>

    <!--Color Scheme-->
    <link type="text/css" rel="stylesheet" href="{{ asset('cocosmile/css/color.css') }}"  media="screen"/>

    <!--Main CSS File-->
    <link type="text/css" rel="stylesheet" href="{{ asset('cocosmile/css/style.css') }}"  media="screen"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Modernizr-->
    <script src="{{ asset('cocosmile/js/modernizr.min.js') }}"></script>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('cocosmile/images/favicon.png') }}" type="images/png" />
  
    <!-- APPLE TOUCH ICON -->
    <link rel="apple-touch-icon" href="{{ asset('cocosmile/images/webclip.png') }}">

    <!-- OG -->
    <meta property="og:title" content="Coco Smile" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.versatilehaus.com/cocosmile/images/fb-share.jpg" />
    <meta property="og:url" content="http://www.versatilehaus.com/cocosmile" />
    <meta property="og:description" content="Coco Smile 100% Pure Coconut Water" />
</head>
<body class="">
     <div class="loader">
        <div class="spinner"></div>
    </div>

     <!-- Main wrapper -->
    <div class="main-wrapper">
    
        @include('frontend.partials.navbar')

        @yield('content')

        @include('frontend.partials.counsel')
        @include('frontend.partials.footer')

    </div>
    <!-- END MAIN CONTAINER -->

    @include('frontend.layouts.script')
    @stack('script')


</body>
</html>