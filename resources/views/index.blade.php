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

    <style>
        /* Default height for small devices */

        /* Height for devices larger than 992px */
    </style>
</head>

<body class="">
    @include('navbar.nav')

    <section class="bg-color">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-sm-12 col-xs-12 col-lg-6 col-md-12">
                    <img src="images/m1.jpeg" class="img-hrs" alt="Bootstrap Themes"
                         loading="lazy">
                </div>
                
                <div class="col-lg-6 pb-5 ">
                    <h4 class="lh-1 mb-3 h-text1">Notre engagement</h4>
                    <h1 class="display-5 lh-1 mb-3 h-text">pour la societe</h1>

                    <p class="lead ">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <p><span class="c-hibs text-uppercase">Découvrez nos activités</span></p>
                    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div> -->
                </div>

            </div>
            <div class="lrobus-a">
                <div class="row">
                    <div class="col-lg-12 c-row ">
                        <div class="card c-card">
                            <div class="card-body">
                                <p class="card-text mb-0">
                                <h3 class="text-muted text-white">Nos domaines d'activites</h3>
                                <span class="text-white fw-bold">Education,Environnement,sante,action
                                    communautaire,lorem,ipsumlor,hisicus</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- <div class="b-example-divider"></div> -->
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
</body>

</html>