<?php $profile = get_profile(); ?>
<?php $pubs = get_pubs(); ?>

<div class="page">
    <div class="row py-5 px-5">
        <div class="col-lg-4 widget-pre">
            <div class="card profile shadow">
                <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="card-img shadow" alt="foto Andrea Costacurta">
            </div>
            <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn home-btn btn-lg mt-5" target="_blank">Curriculum [pdf]</a>
        </div>
        <div class="col-lg-8 px-5">
            <h1 class="section text-uppercase pb-4 pl-2">Qualcosa su di me ...</h1>
            <p class="text-justify profile-desc"><?php echo html_entity_decode(htmlentities($profile['pro_desc'])); ?></p>
            <p>ALTRI SERVIZI</p>
            <p class="text-justify profile-desc"><?php echo html_entity_decode(htmlentities($profile['pro_servizi'])); ?></p>
            <p>Psicoanalista formato con il Prof. Arnaldo Petterlini</p>
        </div>
    </div>
    <div class="widget-top mt-5 py-5 px-3">
        <h4 class="section font-weight-bold">Pubblicazioni</h4>
        <ul>
            <?php 
                for($i = 0; $i < count($pubs); $i++) {
                    $link = display_image($pubs[$i]['pub_link']);
                    echo "<li><a href='../resources/{$link}' target='_blank'>{$pubs[$i]['pub_title']}<span class='text-muted'>({$pubs[$i]['pub_autor']}) - {$pubs[$i]['pub_subtitle']}</span></a></li>";
                }
            ?>
        </ul>
    </div>
</div>