<?php
  require "header.php";
?>
    <!-- Header Area End -->

    <!-- Google Maps Start -->
    <div class="akame-google-maps-area">
       <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50793.44818545491!2d9.82648470100024!3d37.28113628648858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e31e4db2105f13%3A0xf44361a00609c69e!2sBizerte!5e0!3m2!1sen!2stn!4v1549722038089" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.4888143131284!2d9.857909315324694!3d37.283547248041565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDE3JzAwLjgiTiA5wrA1MSczNi40IkU!5e0!3m2!1sen!2stn!4v1549724525288" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Google Maps End -->

    <!-- Contact Information Area Start -->
    <section class="contact-information-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_phone"></i>
                        <h4>Numéro</h4>
                        <p>+216 25-889-988</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_pin"></i>
                        <h4>Adresse</h4>
                        <p>Boulevard 14 Janvier, Bizerte</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_clock"></i>
                        <h4>Temps ouvert</h4>
                        <p>09:30 am - 19:30 pm</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_mail"></i>
                        <h4>E-mail</h4>
                        <p>commercialdesigncuisine@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Information Area End -->

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Envoyer un message</h2>
                        <p>Nous vous rappellerons plus tard et répondrons à vos questions.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="#" method="post" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="message-nom" class="form-control mb-30" placeholder="Votre Nom">
                                <input type="text" name="message-prenom" class="form-control mb-30" placeholder="Votre prénom">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                <input type="Tel" name="Numéro" class="form-control mb-30" placeholder="Téléphone">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-30" placeholder="Ecrivez voutre message..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

   <?php
require 'footer.php';
   ?>