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

<script src="../public/js/show-on-scroll.js"></script>