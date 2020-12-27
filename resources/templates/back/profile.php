<?php $profile = get_profile(); ?>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-lg-4">
      <img width="400" src="../../resources/<?php echo display_image($profile['pro_foto']); ?>" alt="">
    </div>
    <div class="col-lg-8">
      <div class="card-body">

        <p class="card-text font-weight-bold">Descrizione</p>
        <p class="card-text text-justify"><?php echo $profile['pro_desc']; ?></p>

        <p class="card-text font-weight-bold">Curriculum</p>
        <p class="card-text"><?php echo $profile['pro_cv']; ?></p>

        <p class="card-text font-weight-bold">Email di contatto</p>
        <p class="card-text text-justify"><?php echo $profile['pro_email']; ?></p>

        <p class="card-text font-weight-bold">Recapito telefonico</p>
        <p class="card-text text-justify"><?php echo $profile['pro_tel']; ?></p>

        <a class="btn btn-warning btn-lg mt-4" href="../../public/admin/index.php?edit_profile">Modifica</a>
      </div>
    </div>
  </div>
</div>