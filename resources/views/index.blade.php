@extends('layouts.app-layout')
    <!-- ***** Main Banner Area Start ***** -->
    @section('content')
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
                                    <p>Mexant HTML5 Template is provided for free of charge. This layout is based on
                                        Boostrap 5 CSS framework. Anyone can download and edit for any professional
                                        website. Thank you for visiting TemplateMo website.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#activities">Nos activites</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="/contact">Nous contacter</a>
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
                                    <p>You will see a bunch of free CSS templates when you search on Google. TemplateMo
                                        website is probably the best one because it is 100% free. It does not ask you
                                        anything in return. You have a total freedom to use any template for any
                                        purpose.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#activities">Discover More</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="/contact">Contact Us</a>
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
                                    <p>When you browse through different tags on TemplateMo website, you can see a
                                        variety of CSS templates which are responsive website designs for different
                                        individual needs. Please tell your friends about our website. Thank you.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#activities">Discover More</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="/contact">Contact Us</a>
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
    <div class="b-example-divider"></div>

    <section class="c-misucdas">
        <div class="container px-4 mvob" id="featured-3">
            <h2 class="pb-2 border-bottom text-white">Aliquip reprehenderit ad enim elit.</h2>
            <div class="row g-4 py- row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="count-area-content ">
                        <div class="count-digit">Objectif</div>
                        <div class="count-title">Succesed Students
                            Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>

                        </div>
                    </div>
                </div>
                <div class="feature col">
                    <div class="count-area-content ">
                        <div class="count-digit">Mission</div>
                        <div class="count-title">Succesed Students
                            Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>

                        </div>
                    </div>
                </div>
                <div class="feature col">
                    <div class="count-area-content">
                        <div class="count-digit">Vision</div>
                        <div class="count-title">Succesed Students
                            Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="b-example-divider"></div>
    <section class="container-fluid bg-trans">

        <div class="container">
            <div class="row  pt-5" id="activities">
                <h4 class="card-title  text-center text-white">Nos activites</h4>
                <hr class="" style="color: white;">
            </div>

            <!-- <a href=""><button type="button" class="btn-activite text-white fw-bold">Voir tous nos activites</button></a> -->
            <div class="row align-items-start pb-5">
                <div class="col-lg-3">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark bg-light rounded-4 shadow-lg">
                        <!-- Contenu de la carte de catégorie -->
                        <div class="card-header">
                            <h4 class="text-center pt-2">Activites comming</h4>

                        </div>
                        <div class="d-flex flex-column h-100 p-5 pb-3">
                            <ul class="category-list list-unstyled mt-auto">
                                <li class="category-item"><a href="#">Sed tempus enim leo</a></li>
                                <li class="category-item"><a href="#">Sed tempus enim leo</a></li>
                                <li class="category-item"><a href="#">Sed tempus enim leo</a></li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#"><button class="btn-activite text-white fw-bold">Tous nos activites</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-lg-5">
                            <div class="card">
                                <img src="images/donSang.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p class="card-text">Date</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <img src="images/donSang.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p class="card-text">Date</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <!-- Le dernier card en bas de la deuxième carte de la première ligne -->
                            <div class="card">
                                <img src="images/donSang.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p class="card-text">Date</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <!-- Le dernier card en bas de la deuxième carte de la première ligne -->
                            <div class="card">
                                <img src="images/donSang.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <p class="card-text">Date</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
