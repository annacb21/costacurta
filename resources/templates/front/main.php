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
<div class="row mt-5 page align-items-center">
    <div class="col-lg-4 px-0 borderLeft text-center">
        <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="profile-img" alt="foto Andrea Costacurta">
    </div>
    <div class="col-lg-8 pl-0 borderRight">
        <div class="text-uppercase pb-5">
            <h3 class="section-title pb-2 mb-0">Qualcosa su di me ...</h3>
            <div class="w-25 borderBottom"></div>
        </div>
        <p class="profile-subtitle">
            Costacurta Andrea, Medico Chirurgo Specialista in Psichiatria <br />
            – Psichiatra e Psicoterapeuta, Psicoanalista -
        </p>
        <p class="text-justify profile-desc">
            Libero professionista, già dirigente presso Dipartimento di Salute Mentale.<br />
            Consulente Tecnico in ambito forense, già Direttore e Responsabile Clinico di Comunità.<br />
            Ha una riconosciuta e consolidata esperienza nella diagnosi e trattamento dei disturbi psichiatrici e caratteriali dell’età adulta.
        </p>
        <div class="row justify-content-between pt-3">
            <div class="col-lg-4 px-0">
                <a role="button" href="../public/index.php?chisono" class="btn btn-lg dark-btn">Approfondisci</a>
            </div>
            <div class="col-lg-4 px-0">
                <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn btn-lg light-btn float-right" target="_blank">Curriculum Vitae</a>
            </div>
        </div>
    </div>
</div>

<!-- PERCORSO -->
<div class="mt-5 page bg-color">
    <h3 class="text-uppercase section-title py-3 text-center text-white">Professionalità - Interdisciplinarità - Empatia</h3>
    <div class="row py-4">
        <div class="col-lg-3 px-2 text-center">
            <img src="../public/images/percorso1.png" class="pb-5" alt="icona percorso 1">
            <p class="percordo-title pb-3">Profilo diagnostico</p>
            <p>Anamnesi, storia personale, identificazione dei sintomi</p>
        </div>
        <div class="col-lg-3 px-2 text-center">
            <img src="../public/images/percorso2.png" class="pb-5" alt="icona percorso 2">
            <p class="percordo-title pb-3">Miglior soluzione</p>
            <p>Individuazione congiunta degli obiettivi terapeutici da raggiungere</p>
        </div>
        <div class="col-lg-3 px-2 text-center">
            <img src="../public/images/percorso3.png" class="pb-5" alt="icona percorso 3">
            <p class="percordo-title pb-3">Programma terapeutico</p>
            <p>Scelta degli strumenti terapeutici più idonei e pianificazione del percorso</p>
        </div>
        <div class="col-lg-3 px-2 text-center">
            <img src="../public/images/percorso4.png" class="pb-5" alt="icona percorso 4">
            <p class="percordo-title pb-3">Valutazione dell’esito</p>
            <p>Riappropriarsi della capacità prospettica,miglioramento e risoluzione del sintomo, aumento della consapevolezza di sè</p>
        </div>
    </div>
</div>

<!-- PRENOTAZIONI -->
<div class="mt-5 page" id="prenota">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="text-uppercase text-center section pb-5">Prenota un appuntamento</h3>
        </div>
        <div class="col-lg-6">
            <h3 class="text-uppercase text-center section pb-5">Oppure contattami</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 widget-pre">
            <a id="zl-url" class="zl-url" href="https://www.miodottore.it/andrea-costacurta/psichiatra-psicoterapeuta/padova" rel="nofollow" data-zlw-doctor="andrea-costacurta" data-zlw-type="big" data-zlw-opinion="false" data-zlw-hide-branding="true">Andrea Costacurta - MioDottore.it</a>
        </div>
        <div class="col-lg-6">
            <form action="" method="POST" class="mx-auto">
                <?php send_email(); ?>
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Nome e cognome" class="form-control" id="name" required data-validation-required-message="Inserire il proprio nome e cognome">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required data-validation-required-message="Inserire una email valida">
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Scrivi qui il tuo messaggio" required data-validation-required-message="Inserire un messaggio"></textarea>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btn-lg">Invia</button>
            </form>
        </div>
    </div>
</div>

<script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>