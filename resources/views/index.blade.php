<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
    <!-- Styles -->
    
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/templatemo-574-mexant.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/owl.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/animate.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body class="">
    @include('navbar.nav')

  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(/images/slide-01.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Get <em>ready</em> for your business<br>&amp; upgrade <em>all aspects</em></h2>
                  <div class="div-dec"></div>
                  <p>Mexant HTML5 Template is provided for free of charge. This layout is based on Boostrap 5 CSS framework. Anyone can download and edit for any professional website. Thank you for visiting TemplateMo website.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(/images/slide-02.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Digital</em> Currency for you <br>&amp; Best <em>Crypto</em> Tips</h2>
                  <div class="div-dec"></div>
                  <p>You will see a bunch of free CSS templates when you search on Google. TemplateMo website is probably the best one because it is 100% free. It does not ask you anything in return. You have a total freedom to use any template for any purpose.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/slide-03.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Best One in Town<br>&amp; Crypto <em>Services</em></h2>
                  <div class="div-dec"></div>
                  <p>When you browse through different tags on TemplateMo website, you can see a variety of CSS templates which are responsive website designs for different individual needs. Please tell your friends about our website. Thank you.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
    <section class="c-misucdas">

        <div class="container px-4 mvob" id="featured-3">
            <h2 class="pb-2 border-bottom">Columns with icons</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection" />
                        </svg>
                    </div>
                    <h4 class="text-muted">Vison</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>

                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#people-circle" />
                        </svg>
                    </div>
                    <h4 class="text-muted">Mission</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                  
                </div>
                <div class="feature col">
                    <div
                        class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2" />
                        </svg>
                    </div>
                    <h4 class=" text-muted">Objectif</h4>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                 
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <div class="row">
            <h4 class="card-title text-muted text-center">Nos activites</h4>
        </div>

        <a href=""><button type="button" class="btn-activite text-white fw-bold">Voir tous nos activites</button></a>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col-lg-4">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('images/plantation3.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Plantation d'arbre</h3>
                        <ul class="d-flex list-unstyled mt-auto">


                        </ul>
                        <div class="it mt-4 mb-3">
                            <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
                            <span class="evenement-titre ">date debut </span><br>
                            <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
                            <span class="evenement-titre ">lieu</span>
                        </div>
                        <div class="event-label">
                            <!-- You can customize the label text based on whether it's new or in a few days -->
                            <span class="label-text">A venir</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('images/donSang.jpeg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                        <ul class="d-flex list-unstyled mt-auto">


                        </ul>
                        <div class="it mt-4 mb-3">
                            <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
                            <span class="evenement-titre ">date debut </span><br>
                            <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
                            <span class="evenement-titre ">lieu</span>
                        </div>
                        <div class="event-label">
                            <!-- You can customize the label text based on whether it's new or in a few days -->
                            <span class="label-text">A venir</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                        <ul class="d-flex list-unstyled mt-auto">


                        </ul>
                        <div class="it mt-4 mb-3">
                            <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
                            <span class="evenement-titre ">date debut </span><br>
                            <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
                            <span class="evenement-titre ">lieu</span>
                        </div>
                        <div class="event-label">
                            <!-- You can customize the label text based on whether it's new or in a few days -->
                            <span class="label-text">A venir</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Background image -->
    @include('footer.foot')
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset ('vendor/jquery/jquery.min.js' )}}"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <script src="{{ asset ('assets/js/isotope.min.js') }}"></script>
      <script src="{{ asset ('assets/dist/js/owl-carousel.js') }}"></script>
  
      <script src="{{ asset ('assets/dist/js/tabs.js') }}"></script>
      <script src="{{ asset ('assets/dist/js/swiper.js') }}"></script>
      <script src="{{ asset ('assets/dist/js/custom.js') }}"></script>
      <script>
          var interleaveOffset = 0.5;
  
        var swiperOptions = {
          loop: true,
          speed: 1000,
          grabCursor: true,
          watchSlidesProgress: true,
          mousewheelControl: true,
          keyboardControl: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          on: {
            progress: function() {
              var swiper = this;
              for (var i = 0; i < swiper.slides.length; i++) {
                var slideProgress = swiper.slides[i].progress;
                var innerOffset = swiper.width * interleaveOffset;
                var innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".slide-inner").style.transform =
                  "translate3d(" + innerTranslate + "px, 0, 0)";
              }      
            },
            touchStart: function() {
              var swiper = this;
              for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
              }
            },
            setTransition: function(speed) {
              var swiper = this;
              for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".slide-inner").style.transition =
                  speed + "ms";
              }
            }
          }
        };
  
        var swiper = new Swiper(".swiper-container", swiperOptions);
      </script>
</body>

</html>