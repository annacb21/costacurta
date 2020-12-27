<?php $profile = get_profile(); ?>

<div id="chisono" class="pb-5">
    <h1 class="subtitle">Dott. Andrea Costacurta</h1>
    <div class="row pt-5">
        <div class="col-lg-4">
            <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" alt="Foto Andrea Costacurta" class="float-lg-left img-fluid">
        </div>
        <div class="col-lg-8">
            <p class="text-justify"><?php echo $profile['pro_desc']; ?></p>
            <a role="button" href="../resources/<?php echo display_image($profile['pro_cv']); ?>" class="btn btn-outline-info btn-lg mt-5">Curriculum [pdf]</a>
        </div>
    </div>
</div>