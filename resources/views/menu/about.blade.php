<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    {{-- font aweson --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">

    <title>About Us</title>
    <style>
    .c-content{
       margin-left: 9%;
       padding-top: 4rem;
   }
    </style>
</head>
<body>
    @include('navbar.nav')
    <!-- About Start -->
    <section>
        <div class="" id="hero_contact">
            <div class="row c-content">
                <p class="card-text ">
                    <h4 class="display-5 text-white fw-bold">A Propos</h4>
                    <h5 class="fw-bold text-white">Acceuill>>a propos</h5>
                </p>
            </div>
        </div>
    </section>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="images/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="images/about.jpg" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->
    @include('footer.foot')
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>