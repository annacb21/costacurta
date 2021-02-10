<?php $profile = get_profile(); ?>
<?php $disturbi = get_dist(); ?>
<?php $servizi = get_serv(); ?>

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-lg-2">
      <img src="../resources/<?php echo display_image($profile['pro_foto']); ?>" alt="" class="img-thumbnail">
    </div>
    <div class="col-lg-10">
      <div class="card-body">
        <p class="card-text font-weight-bold">Descrizione</p>
        <p class="card-text text-justify"><?php echo $profile['pro_desc']; ?></p>

        <p class="card-text font-weight-bold">Curriculum</p>
        <p class="card-text"><?php echo $profile['pro_cv']; ?></p>

        <a class="btn btn-primary btn-lg" href="../admin/index.php?edit_profile">Modifica</a>
      </div>
    </div>
  </div>
</div>

<?php display_message(); ?>

<div class="row mb-5">
    <div class="col-lg-6">
        <div class="card my-5">
          <div class="card-header h5">Aggiungi disturbo</div>
          <div class="card-body">
              <form id="distForm" action="" method="POST" class="needs-validation" novalidate>

                  <?php add_disturbo(); ?>

                  <div class="form-group">
                      <label for="nome" class="form-label">Nome disturbo</label>
                      <input type="text" name="nome" class="form-control" id="nome" required>
                      <div class="invalid-feedback">Inserire il nome del disturbo</div>
                  </div>

                  <div class="form-group mt-4">
                      <button name="addDisturbo" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                      <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('distForm')">Cancella</button>           
                  </div> 

              </form>
          </div>
      </div>
    </div>
    <div class="col-lg-6">
        <div class="card my-5">
          <div class="card-header h5">Aggiungi servizio</div>
          <div class="card-body">
              <form id="servForm" action="" method="POST" class="needs-validation" novalidate>

                  <?php add_servizio(); ?>

                  <div class="form-group">
                      <label for="nome" class="form-label">Nome servizio</label>
                      <input type="text" name="nome" class="form-control" id="nome" required>
                      <div class="invalid-feedback">Inserire il nome del servizio</div>
                  </div>

                  <div class="form-group mt-4">
                      <button name="addServizio" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                      <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('servForm')">Cancella</button>           
                  </div> 

              </form>
          </div>
      </div>
    </div>
    <div class="col-lg-6">
        <ul class="list-group">
          <?php
            for($i=0; $i<count($disturbi); $i++) {
              echo "<li class='list-group-item d-flex justify-content-between'>{$disturbi[$i]['disturbo_name']}<a href='../admin/index.php?delete_dist&id={$disturbi[$i]['disturbo_id']}' role='button' class='btn btn-danger'>Elimina</a></li>";
            }
           ?>
        </ul>
    </div>
    <div class="col-lg-6">
        <ul class="list-group">
          <?php
            for($i=0; $i<count($servizi); $i++) {
              echo "<li class='list-group-item d-flex justify-content-between'>{$servizi[$i]['servizio_name']}<a href='../admin/index.php?delete_serv&id={$servizi[$i]['servizio_id']}' role='button' class='btn btn-danger'>Elimina</a></li>";
            }
           ?>
        </ul>
    </div>
</div>

<script src="../js/validate.js"></script>