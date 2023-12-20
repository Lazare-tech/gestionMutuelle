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
    <title>Contact</title>
    <style>

   .contact-form .help-block ul {
margin: 0;
padding: 0;
list-style-type: none;

}
   .bg-secondary{
    background-color: #F2F1F8 !important;
   }
   .c-content{
       margin-left: 9%;
       padding-top: 4rem;
   }
  
    </style>
</head>
<body>
@include('navbar.nav')
<section>
    <div class="" id="hero_contact">
        <div class="row c-content">
            <p class="card-text ">
                <h4 class="display-5 text-white fw-bold">Contact</h4>
                <h5 class="fw-bold text-white">Acceuill>>contact</h5>
            </p>
        </div>
    </div>
</section>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h3>Contactez nous Pour plus d'informations</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer.foot')
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>