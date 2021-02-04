<?php display_message(); ?>

<div class="card mb-5">
    <div class="card-header h5">Aggiungi video</div>
    <div class="card-body">
        <form id="videoForm" action="" method="POST" class="needs-validation" novalidate>

            <?php add_video(); ?>

            <div class="form-group">
                <label for="title" class="form-label">Titolo video</label>
                <input type="text" name="title" class="form-control" id="title" required>
                <div class="invalid-feedback">Inserire il titolo del video</div>
            </div>

            <div class="form-group">
                <label for="link" class="form-label">Link video</label>
                <input type="text" name="link" class="form-control" id="link" required>
                <div class="invalid-feedback">Inserire il link al video</div>
            </div>

            <div class="form-group mt-5">
                <button name="addVideo" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('videoForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Video presenti</h3>
<div class="row mb-5 border-bottom">
    <?php get_video_thumb(); ?>
</div>

<script src="../../public/js/validate.js"></script>
