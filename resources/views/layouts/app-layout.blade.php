
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
    <!-- Styles -->

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/dist/css/fontawesome.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>
<body>
<header>
    @include('navbar.nav')

</header>
@section('content')

@endsection

        @include('footer.foot')
     <!-- Bootstrap core JavaScript -->
     <script src="{{ asset ('vendor/jquery/jquery.min.js' )}}"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
 
     <script src="{{ asset ('assets/js/isotope.min.js') }}"></script>
     <!-- <script src="{{ asset ('assets/dist/js/owl-carousel.js') }}"></script> -->
 
     <!-- <script src="{{ asset ('assets/dist/js/tabs.js') }}"></script> -->
     <script src="{{ asset ('assets/dist/js/swiper.js') }}"></script>
     <!-- <script src="{{ asset ('assets/dist/js/custom.js') }}"></script> -->
     <script src="{{ asset ('assets/dist/js/script-var.js') }}"></script>
 
</body>
</html>