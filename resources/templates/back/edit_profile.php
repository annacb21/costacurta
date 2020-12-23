<?php $profile = get_profile(); ?>

<div class="card">
    <div class="card-body">
        <form id="proForm" action="" method="POST" enctype="multipart/form-data">

            <?php update_profile(); ?>

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="desc" class="form-label">Descrizione profilo</label>
                        <textarea class="form-control" name="desc" id="desc" rows="10" cols="40" required data-validation-required-message="Scrivi una breve descrizione per il profilo"><?php echo $profile['pro_desc']; ?></textarea>
                    </div>

                    <div class="form-group mt-5">
                        <button name="update" type="submit" class="btn btn-warning">Modifica</button> 
                        <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('proForm')">Cancella</button>           
                    </div> 

                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <input type="file" id="foto" name="foto"><br>
                        <img class="mt-4" width="200" src="../../resources/<?php echo display_image($profile['pro_foto']); ?>" alt="">
                    </div>

                    <div class="form-group">
                        <input type="file" id="cv" name="cv">
                        <p class="mt-3"><?php echo $profile['pro_cv']; ?></p>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?profile" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>