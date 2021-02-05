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

    <div class="row mt-5 justify-content-around">
        <div class="col-lg-4 px-0 pro-foto-md">
            <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="profile-img2 shadow" alt="foto Andrea Costacurta">
        </div>
        <div class="col-lg-8">
            <div class="card profile-card shadow">
                <?php get_disturbi(); ?>
            </div>
        </div>
    </div>

    <div class="row py-4 align-items-center">
        <div class="col-lg-4 col-md-5 px-0">
            <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn dark-btn cv-btn btn-lg" target="_blank">Curriculum Vitae</a>
        </div>
        <div class="col-lg-7 col-md-6 profile">
            <p class="mb-0">Psicoanalista formato con il Prof. Arnaldo Petterlini</p>
        </div>
    </div>

</div>

<div class="servizi pt-5 mt-5 borderTop">
    <h4 class="text-uppercase">ALTRI SERVIZI</h4>
    <div class="row pt-4">
        <?php get_servizi(); ?>
    </div>
</div>

<!-- PUBBLICATIONS -->
<div class="bg-color page" id="pubblicazioni">
    <p class="page-title-dark">Pubblicazioni</p>
    <ul class="px-3 pt-4">
        <?php 
            for($i = 0; $i < count($pubs); $i++) {
                if($pubs[$i]['pub_link'] === NULL) {
                    $link = "#pubblicazioni";
                    $target = '';
                }
                else {
                    $url = display_image($pubs[$i]['pub_link']);
                    $link = "../resources/{$url}";
                    $target = '_blank';
                }
                echo "<li class='pl-3 pb-3'><a href='{$link}' target='{$target}' class='link-light'>{$pubs[$i]['pub_title']}<span class='pub-small pl-2'>({$pubs[$i]['pub_autor']}) {$pubs[$i]['pub_subtitle']}</span></a></li>";
            }
        ?>
    </ul>
</div>

<!-- AFFILIATION -->
<div class="text-center py-5">
    <h3 class="section-title text-uppercase pb-3">Affiliazioni</h3>   
    <div class="row justify-content-center align-items-center">
        <?php get_aff(); ?>
    </div>   
</div>
