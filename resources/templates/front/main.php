<?php $profile = get_profile(); ?>

<!-- HEADER -->
<div class="row py-5 mb-5" id="header">

    <div class="col-lg-6">
        <h1 class="title">Chiedere aiuto <br> è il primo passo <br> per stare meglio.</h1>
        <a role="button" href="../public/index.php?contatti" class="btn btn-primary btn-lg bottom-div">Prenota appuntamento</a>
    </div>
    <div class="col-lg-6 animate__animated animate__fadeInLeft">
        <img src="../public/images/studio1.png" alt="foto studio Padova" class="mw-100 float-lg-right">
    </div>

</div>

<!-- PROFILE -->
<div id="mainProfile" class="py-5 my-5">

    <div class="row">
        <div class="col-lg-5">
            <img src="../public/images/profile.png" alt="foto Andrea Costacurta" class="w-75 h-auto">
        </div>
        <div class="col-lg-7">
            <div class="row">
                <h2 class="text-primary float-lg-right text-uppercase h4 pb-4">Chi sono</h2>
            </div>
            <div class="row">
                <p class="float-lg-right subtitle">Dott. Andrea Costacurta</p>
            </div>
            <div class="row">
                <p class="float-lg-right text-justify"><?php echo $profile['pro_desc']; ?></p>
            </div>
            <div class="row">
                <a role="button" href="../public/index.php?chisono" class="btn btn-outline-primary btn-lg bottom-div">Approfondisci</a>
            </div>
        </div>
    </div>

</div>

<!-- AREE DI INTERVENTO -->
<div id="areas" class="pt-5">

    <h2 class="text-primary text-uppercase h4 mb-5">Aree di intervento</h2>

    <div class="row">
        <?php get_area_thumbnails(); ?>
    </div>

    <a role="button" href="../public/index.php?aree" class="btn btn-outline-primary btn-lg">Approfondisci</a>

</div>

<script src="../public/js/show-on-scroll.js"></script>