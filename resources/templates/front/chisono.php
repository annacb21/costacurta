<?php $profile = get_profile(); ?>
<?php $pubs = get_pubs(); ?>

<div class="py-5 px-5 page">
    <div class="row">
        <div class="col-lg-4 widget-pre">
            <h1 class="section text-uppercase pb-4 pl-2">Qualcosa su di me ...</h1>
            <div class="card profile shadow">
                <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" class="card-img shadow" alt="...">
                <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn home-btn btn-lg mt-5">Curriculum [pdf]</a>
            </div>
        </div>
        <div class="col-lg-8 px-5">
            <p class="text-justify profile-desc"><?php echo html_entity_decode(htmlentities($profile['pro_desc'])); ?></p>
        </div>
    </div>
    <div class="widget-top mt-5 py-5 px-3">
        <h4 class="section font-weight-bold">Pubblicazioni</h4>
        <ul>
            <?php 
                for($i = 0; $i < count($pubs); $i++) {
                    echo "<li>{$pubs[$i]['pub_title']}<span class='text-muted'>({$pubs[$i]['pub_autor']}) - {$pubs[$i]['pub_note']}</span></li>";
                }
            ?>
        </ul>
    </div>
</div>