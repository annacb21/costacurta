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

<!-- PROFILE -->
<div id="mainProfile" class="py-5 my-5">

    <div class="row">
        <div class="col-lg-5 col-xl-5">
            <img src="../public/images/profile.png" alt="foto Andrea Costacurta" class="w-75 h-auto">
        </div>
        <div class="col-lg-7 col-xl-7">
            <div class="row">
                <h2 class="text-primary float-lg-right text-uppercase h4 pb-4">Chi sono</h2>
            </div>
            <div class="row">
                <p class="float-lg-right subtitle">Dott. Andrea Costacurta</p>
            </div>
            <div class="row">
                <p class="float-lg-right text-justify"><?php echo $profile['pro_desc']; ?></p>
            </div>
            <div class="row pt-5">
                <a role="button" href="../public/index.php?chisono" class="btn btn-outline-primary btn-lg bottom-div">Approfondisci</a>
            </div>
        </div>
    </div>

</div>

<!-- AREE DI INTERVENTO -->
<div id="areas" class="pt-5">

    <h2 class="text-primary text-uppercase h4 mb-5">Aree di intervento</h2>

    <div class="row justify-content-evenly align-items-start">
        <?php get_area_thumbnails(); ?>
    </div>

    <a role="button" href="../public/index.php?aree" class="btn btn-outline-primary btn-lg">Approfondisci</a>

</div>

<script src="../public/js/show-on-scroll.js"></script>