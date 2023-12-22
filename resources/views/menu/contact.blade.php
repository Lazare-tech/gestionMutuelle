@extends('layouts.app-layout')
@section('title', 'Contact')
@section('content')
  <div class="page-heading" style="background-image: url('images/slide-01.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Nous Contacter</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="map">
    <div class="container">
      <div class="row">

        <div class="col-lg-10 offset-lg-1">
          <div class="row">
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-envelope"></i>
                <h4>Addresse Email</h4>
                <a href="#">info@company.com</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-phone"></i>
                <h4>Numero Telephone</h4>
                <a href="#">010-020-0340</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-map-marked-alt"></i>
                <h4>Addresse</h4>
                <a href="#">Victoria, Australia</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading pt-4">
            <h6>Nous contacter</h6>
            <h4>Feel free to message us</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Votre nom..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="phone" name="phone" id="phone" placeholder="Numero de telephone..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Votre E-mail..."
                    required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Envoyer</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection