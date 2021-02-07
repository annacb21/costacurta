<?php $profile = get_profile(); ?>

<!-- HEADER CAROUSEL -->
<div id="headerCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <?php get_active_quote(); ?>
        <?php get_quotes(); ?>
    </div>
    <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> 
</div>

<!-- QUALCOSA SU DI ME -->
<div class="row py-5 align-items-center justify-content-around borderX main-who">
    <div class="col-xl-4 col-lg-4 col-md-12 px-0 text-center profile-col">
        <img src="../public/images/profile1.jpg" class="profile-img shadow" alt="foto Andrea Costacurta">
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12 profile-md">
        <div class="text-uppercase pb-5">
            <h3 class="section-title pb-2 mb-0">Dott. Andrea Costacurta</h3>
            <div class="w-25 borderBottom"></div>
        </div>
        <p class="profile-subtitle">
            Medico Chirurgo Specialista in Psichiatria <br />
            – Psichiatra e Psicoterapeuta, Psicoanalista -
        </p>
        <p class="text-justify profile-desc">
            Libero professionista, già dirigente presso Dipartimento di Salute Mentale.<br />
            Consulente Tecnico in ambito forense, già Direttore e Responsabile Clinico di Comunità.<br />
            Ha una riconosciuta e consolidata esperienza nella diagnosi e trattamento dei disturbi psichiatrici e caratteriali dell’età adulta.
        </p>
        <div class="row justify-content-between pt-3">
            <div class="col-lg-6 col-md-4 px-0">
                <a role="button" href="../public/index.php?chisono" class="btn btn-lg dark-btn">Approfondisci</a>
            </div>
            <div class="col-lg-6 col-md-5 profile-btn-md">
                <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn btn-lg light-btn float-right" target="_blank">Curriculum Vitae</a>
            </div>
        </div>
    </div>
</div>

<!-- PERCORSO -->
<div class="page bg-color main-per">
    <h3 class="text-uppercase section-title-light pb-4 pt-3 text-center">Professionalità - Interdisciplinarità - Empatia</h3>
    <div class="row py-4">
        <div class="col-lg-3 px-2 text-center perc">
            <img src="../public/images/percorso1.svg" class="pb-5 perc-img" alt="icona percorso 1">
            <p class="percordo-title pb-3">Profilo diagnostico</p>
            <p class="percorso-desc">Anamnesi, storia personale, identificazione dei sintomi</p>
        </div>
        <div class="col-lg-3 px-2 text-center perc">
            <img src="../public/images/percorso2.svg" class="pb-5 perc-img" alt="icona percorso 2">
            <p class="percordo-title pb-3">Miglior soluzione</p>
            <p class="percorso-desc">Individuazione congiunta degli obiettivi terapeutici da raggiungere</p>
        </div>
        <div class="col-lg-3 px-2 text-center perc">
            <img src="../public/images/percorso3.svg" class="pb-5 perc-img" alt="icona percorso 3">
            <p class="percordo-title pb-3">Programma terapeutico</p>
            <p class="percorso-desc">Scelta degli strumenti terapeutici più idonei e pianificazione del percorso</p>
        </div>
        <div class="col-lg-3 px-2 text-center perc">
            <img src="../public/images/percorso4.svg" class="pb-5 perc-img" alt="icona percorso 4">
            <p class="percordo-title pb-3">Valutazione dell’esito</p>
            <p class="percorso-desc">Riappropriarsi della capacità prospettica,miglioramento e risoluzione del sintomo, aumento della consapevolezza di sè</p>
        </div>
    </div>
</div>

<!-- PRENOTAZIONI -->
<div class="mt-5 page" id="prenotazioni">
    <div class="text-uppercase">
        <h3 class="section-title pb-2 mb-0">Prenota un appuntamento ...</h3>
        <div class="w-25 borderBottom"></div>
    </div>
    <div class="row pt-5 align-items-center">
        <div class="col-lg-6 px-0 p1">
            <p class="dark-subtitle text-center pb-3">Tramite MioDottore</p>
        </div>
        <div class="col-lg-6 px-0 borderLeft pb-0 p2">
            <p class="dark-subtitle text-center pb-3">Oppure contattami</p>
        </div>
        <div class="col-lg-6 px-0 p3">
            <a id="zl-url" class="zl-url" href="https://www.miodottore.it/andrea-costacurta/psichiatra-psicoterapeuta/padova" rel="nofollow" data-zlw-doctor="andrea-costacurta" data-zlw-type="big" data-zlw-opinion="false" data-zlw-hide-branding="true">Andrea Costacurta - MioDottore.it</a>
        </div>
        <div class="col-lg-6 px-0 borderLeft p4">
            <?php display_message(); ?>
            <form action="" method="POST" class="contact-form needs-validation" novalidate>
                <?php send_email('home'); ?>
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
                <div class="mb-3">
                    <input type="checkbox" class="form-input-control" id="check" name="check" required>
                    <label class="form-check-label" for="check">
                        Dichiaro di essere già maggiorenne e acconsento al trattamento dei miei dati personali per fini informativi e di prenotazione. <a href="https://www.iubenda.com/privacy-policy/56078482" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                    </label>
                    <div class="invalid-feedback">Devi accettare le confizioni di privacy per inviare l'email</div>
                </div>
                <button name="sendEmail" type="submit" class="btn btn-primary px-5">Invia</button>
            </form>
        </div>
    </div>
</div>

<script src="../public/js/validate.js"></script>
<script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>