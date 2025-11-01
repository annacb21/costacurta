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
                <div class="pb-4 d-flex studio-popover">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="pl-3">
                        <p class="font-weight-bold mb-1"><?php echo $studi[0]['studio_name']; ?></p>
                        <p class="mb-0"><?php echo $studi[0]['studio_adress']; ?></p>
                        <p class="mb-0">Tel: <?php echo $studi[0]['studio_phone']; ?></p>
                    </div>
                    <div class="indicazioni card">
                        <p class="font-weight-bold mb-1">Indicazioni</p>
                        <p class="mb-0">Piano 4°. Palazzo bianco e verde al lato destro della Fornace Carotta, civico di fronte ad una pizzeria per asporto. Campanello numero 15.</p>
                    </div>
                </div>
                <div class="pb-4 d-flex">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="pl-3">
                        <p class="font-weight-bold mb-1"><?php echo $studi[1]['studio_name']; ?></p>
                        <p class="mb-0"><?php echo $studi[1]['studio_adress']; ?></p>
                        <p class="mb-0">Tel: <?php echo $studi[1]['studio_phone']; ?></p>
                        <p class="mb-0">Cell: <?php echo $studi[1]['studio_cell']; ?></p>
                    </div>
                </div>
                <div class="pb-4 d-flex">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="pl-3">
                        <p class="font-weight-bold mb-1"><?php echo $studi[2]['studio_name']; ?></p>
                        <p class="mb-0"><?php echo $studi[2]['studio_adress']; ?></p>
                        <p class="mb-0">Tel: <?php echo $studi[2]['studio_phone']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-5 borderLeftSmall" id="contatto">
                <p class="contact-title pb-1">Invia una email</p>
                <?php display_message(); ?>
                <form action="" method="POST" class="needs-validation" novalidate>
                    <?php send_email('contatti'); ?>
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Nome" class="form-control" id="name" required>
                        <div class="invalid-feedback">Inserire il proprio nome</div>               
                    </div>
                    <div class="mb-3">
                        <input type="text" name="cognome" placeholder="Cognome" class="form-control" id="cognome" required>    
                        <div class="invalid-feedback">Inserire il proprio cognome</div>            
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                        <div class="invalid-feedback">Inserire una email valida</div>                
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" placeholder="Telefono" class="form-control" id="telefono">
                        <small class="form-text text-muted px-1 py-1">(Opzionale)</small> 
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Scrivi qui il tuo messaggio" required></textarea>
                        <div class="invalid-feedback">Inserire un messaggio</div>
                    </div>
                    <div class="mb-3 pl-1">
                        <input type="checkbox" class="form-input-control" id="check" name="check" required>
                        <label class="form-check-label" for="check">
                            Dichiaro di essere già maggiorenne e acconsento al trattamento dei miei dati personali per fini informativi e di prenotazione. <a href="https://www.iubenda.com/privacy-policy/56078482" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                        </label>
                        <div class="invalid-feedback">Devi accettare le confizioni di privacy per inviare l'email</div>
                    </div>
                    <button name="sendEmail" type="submit" class="btn btn-primary px-5">Invia</button>
                </form>
            </div>
            <div class="col-lg-12 px-0 text-center">
                <div class="pt-5 pb-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11207.518678563705!2d11.864275!3d45.3915981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x332a1f5d3f3c0451!2sDott.%20Giovanni%20B.%20Carollo!5e0!3m2!1sit!2sit!4v1611940221944!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11144.158279942412!2d11.471777!3d45.710243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf63c8d1dcb08eaf9!2zUHNpY2jDqQ!5e0!3m2!1sit!2sit!4v1611939776356!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.2785784498633!2d12.277375!3d45.20169799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e998886e9e7cf%3A0x41514ecd9f822937!2sAmbulatorio%20MMB%20Clodiense!5e0!3m2!1sit!2sit!4v1762008472168!5m2!1sit!2sit" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>           
                </div>
            </div>
        </div>
    </div>

    <div class="borderTopLarge">
        <div class="px-0 pt-5">
            <p class="contact-title pb-1">Link utili</p>
            <?php link_utili(); ?>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
</script>
<script src="js/validate.js"></script>
<script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>