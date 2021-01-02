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
<div class="row mt-5 py-5 px-5">
    <div class="col-lg-3">
        <div class="card profile shadow">
            <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="card-img shadow" alt="...">
        </div>
    </div>
    <div class="col-lg-9 pl-5">
        <div class="row justify-content-around align-items-center">
            <div class="col-lg-12">
                <h3 class="text-uppercase section pb-4">Qualcosa su di me ...</h3>
            </div>
            <div class="col-lg-12">
                <p class="text-justify profile-desc"><?php echo $profile['pro_desc'] ?></p>
            </div>
            <div class="col-lg-12 bottom-div">
                <a role="button" href="../public/index.php?chisono" class="btn btn-outline-dark btn-lg">Approfondisci</a>
            </div>
        </div>
    </div>
</div>

<!-- PERCORSO -->
<div class="py-5 px-5 mt-5" id="percorso">
    <h3 class="text-uppercase section py-4 text-center text-white">Professionalità - Interdisciplinarità - Empatia</h3>
    <div class="row py-4 mb-4">
        <div class="col-lg-3">
            <div class="card shadow-sm">
                <img src="../public/images/percorso1.svg" class="card-img-top pt-4" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Profilo diagnostico</h5>
                    <p class="card-text text-center">Anamnesi, storia personale, identificazione dei sintomi</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow-sm">
                <img src="../public/images/percorso2.svg" class="card-img-top pt-4" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Miglior soluzione</h5>
                    <p class="card-text text-center">Individuazione congiunta degli obiettivi terapeutici da raggiungere</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow-sm">
                <img src="../public/images/percorso3.svg" class="card-img-top pt-4" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Programma terapeutico</h5>
                    <p class="card-text text-center">Scelta degli strumenti terapeutici più idonei e pianificazione del percorso</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow-sm">
                <img src="../public/images/percorso4.svg" class="card-img-top pt-4" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Valutazione dell'esito</h5>
                    <p class="card-text text-center">Riappropriarsi della capacità prospettica,miglioramento e risoluzione del sintomo, aumento della consapevolezza di sè</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PRENOTAZIONI -->
<div class="py-5 px-5 mt-5" id="prenota">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="text-uppercase text-center section pb-5">Prenota un appuntamento</h3>
        </div>
        <div class="col-lg-6">
            <h3 class="text-uppercase text-center section pb-5">Oppure contattami</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6" id="widget-pre">
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