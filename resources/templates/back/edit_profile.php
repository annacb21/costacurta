<?php $profile = get_profile(); ?>

<div class="card">
    <div class="card-body">
        <form id="proForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php update_profile(); ?>

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group mb-3">
                        <label for="desc" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="desc" id="desc" rows="10" cols="40" required><?php echo $profile['pro_desc']; ?></textarea>
                        <div class="invalid-feedback">Inserire una breve descrizione</div>
                    </div>

                    <div class="form-group mb-3">
                        <input type="file" class="form-control-file" id="cv">
                        <label class="form-label" for="cv">Carica il curriculum...</label>
                        <div class="invalid-feedback">Carica il tuo curriculum</div>
                    </div>

                    <div class="form-group mt-5">
                        <button name="editProfile" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                        <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('proForm')">Cancella</button>         
                    </div> 

                </div>
                <div class="col-lg-6">

                    <img class="mt-4" width="200" src="../../resources/<?php echo display_image($profile['pro_foto']); ?>" alt="">

                    <div class="form-group my-3">
                        <input type="file" class="form-control-file" id="foto">
                        <label class="form-label" for="foto">Carica una foto per il profilo ...</label>
                        <div class="invalid-feedback">Carica una foto per il profilo</div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?profile" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>