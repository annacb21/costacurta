<?php $profile = get_profile(); ?>
<?php $pubs = get_pubs(); ?>

<!-- PAGE QUOTE -->
<?php get_page_quote(1); ?>

<!-- PAGE TITLE -->
<div class="page-title mt-4 bg-color">
    QUALCOSA SU DI ME ...
    <div class="w-25 borderBottomLight pt-2"></div>
</div>

<!-- PAGE CONTENT -->
<div class="page mt-5">

    <!-- PROFILE -->
    <div class="desc">
        <p class="title mb-0">Dott. Andrea Costacurta</p>
        <p class="text-justify"><?php echo html_entity_decode(htmlentities($profile['pro_desc'])); ?></p>
    </div>

    <div class="row mt-4 page borderRight borderLeft">
        <div class="col-lg-4 profile">
            <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="profile-img2 shadow" alt="foto Andrea Costacurta">
        </div>
        <div class="col-lg-8 px-0">
            <div class="card profile-card">
                <?php get_disturbi(); ?>
            </div>
        </div>
    </div>

    <div class="row page py-0 align-items-center">
        <div class="col-lg-4 profile">
            <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn dark-btn btn-block btn-lg" target="_blank">Curriculum Vitae</a>
        </div>
        <div class="col-lg-8 px-0">
            <p class="mb-0">Psicoanalista formato con il Prof. Arnaldo Petterlini</p>
        </div>
    </div>

    <div class="servizi pt-5 mt-5 borderTop">
        <h4 class="text-uppercase">ALTRI SERVIZI</h4>
        <div class="row pt-4">
            <?php get_servizi(); ?>
        </div>
    </div>

</div>

<!-- PUBBLICATIONS -->
<div class="bg-color page">
    <p class="page-title-dark">Pubblicazioni</p>
    <ul class="px-3 pt-4">
        <?php 
            for($i = 0; $i < count($pubs); $i++) {
                $link = display_image($pubs[$i]['pub_link']);
                echo "<li class='pl-3 pb-3'><a href='../resources/{$link}' target='_blank' class='text-white'>{$pubs[$i]['pub_title']}<span class='text-muted pl-2'>({$pubs[$i]['pub_autor']}) {$pubs[$i]['pub_subtitle']}</span></a></li>";
            }
        ?>
    </ul>
</div>

<!-- AFFILIATION -->
<div class="text-center py-5">
    <p class="page-title-dark">Affiliazioni</p>   
    <div class="row justify-content-center align-items-center">
        <?php get_aff(); ?>
    </div>   
</div>
