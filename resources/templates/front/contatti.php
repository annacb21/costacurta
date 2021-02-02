<?php $studi = get_studi(); ?>
<?php $contatti = get_contacts(); ?>

<!-- PAGE QUOTE -->
<?php get_page_quote(5); ?>

<!-- PAGE TITLE -->
<div class="page-title mt-4 bg-color">
    CONTATTI
    <div class="w-25 borderBottomLight pt-2"></div>
</div>

<!-- CONTATTI -->
<div id="contatti">

    <div class="page mt-5 pt-4">
        <div class="row">
            <div class="col-lg-6 px-0">
                <p class="contact-title pb-1">Contatti</p>
                <div class="py-3">
                    <i class="fas fa-at"></i><p class="d-inline-block pl-4 mb-0"><?php echo $contatti[0]['cont_value']; ?></p>
                </div>
                <div>
                    <i class="fas fa-phone"></i><p class="d-inline-block pl-4 mb-0"><?php echo $contatti[1]['cont_value']; ?></p>
                </div>
                <p class="contact-title pb-4 pt-5">Gli studi</p>
                <?php contact_study(); ?>
            </div>
            <div class="col-lg-6 pl-5 borderLeftSmall">
                <?php display_message(); ?>
                <p class="contact-title pb-1">Invia una email</p>
                <form action="" method="POST">
                    <?php send_email(); ?>
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Nome" class="form-control" id="name" required data-validation-required-message="Inserire il proprio nome">               
                    </div>
                    <div class="mb-3">
                        <input type="text" name="cognome" placeholder="Cognome" class="form-control" id="cognome" required data-validation-required-message="Inserire il proprio cognome">               
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required data-validation-required-message="Inserire una email valida">               
                    </div>
                    <div class="mb-3">
                        <input type="number" name="phone" placeholder="Telefono" class="form-control" id="telefono" required data-validation-required-message="Inserire il proprio numero di telefono">                
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Scrivi qui il tuo messaggio" required data-validation-required-message="Inserire un messaggio"></textarea>
                    </div>
                    <div class="mb-3 pl-4">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="check">
                            Dichiaro di essere già maggiorenne e acconsento al trattamento dei miei dati personali per fini informativi e di prenotazione. <a href="https://www.iubenda.com/privacy-policy/56078482" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                        </label>
                    </div>
                    <button name="submit" type="submit" class="btn dark-btn px-5">Invia</button>
                </form>
            </div>
            <div class="col-lg-12 px-0 text-center">
                <div class="pt-5 pb-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11207.518678563705!2d11.864275!3d45.3915981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x332a1f5d3f3c0451!2sDott.%20Giovanni%20B.%20Carollo!5e0!3m2!1sit!2sit!4v1611940221944!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11144.158279942412!2d11.471777!3d45.710243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf63c8d1dcb08eaf9!2zUHNpY2jDqQ!5e0!3m2!1sit!2sit!4v1611939776356!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11245.938330463512!2d12.2958581!3d45.1975288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x936cf23f0d3d4051!2sPoliambulatorio%20San%20Giovanni%20S.R.L!5e0!3m2!1sit!2sit!4v1611940349385!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row borderTopLarge align-items-center">
        <div class="col-lg-8 px-0 pt-5 borderRight">
            <p class="contact-title pb-1">Link utili</p>
            <?php link_utili(); ?>
        </div>
        <div class="col-lg-4 px-0 pt-5 text-center">
            <p class="contact-title pb-5 px-3">Prenota una visita tramite MioDottore</p>
            <a id="zl-url" class="zl-url" href="https://www.miodottore.it/andrea-costacurta/psichiatra-psicoterapeuta/padova" rel="nofollow" data-zlw-doctor="andrea-costacurta" data-zlw-type="big" data-zlw-opinion="false" data-zlw-hide-branding="true">Andrea Costacurta - MioDottore.it</a>
        </div>
    </div>

</div>

<script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>