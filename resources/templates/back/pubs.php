<?php display_message(); ?>
<?php $pubs = get_pubs(); ?>

<div class="card mb-5">
    <div class="card-header h5">Aggiungi pubblicazione</div>
    <div class="card-body">
        <form id="pubForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_pub(); ?>

            <div class="form-group">
                <label for="title" class="form-label">Titolo pubblicazione</label>
                <input type="text" name="title" class="form-control" id="title" required>
                <div class="invalid-feedback">Inserire il titolo della pubblicazione</div>
            </div>

            <div class="form-group">
                <label for="autore" class="form-label">Autore/i pubblicazione</label>
                <input type="text" name="autore" class="form-control" id="autore" required>
                <div class="invalid-feedback">Inserire l'autore/i della pubblicazione</div>
            </div>

            <div class="form-group">
                <label for="sub" class="form-label">Sottotitolo pubblicazione</label>
                <input type="text" name="sub" class="form-control" id="sub">
            </div>

            <div class="form-group mb-3">
                <input type="file" class="form-control-file" id="pubLink" name="pubLink">
                <label class="form-label" for="pubLink">Carica pubblicazione...</label>
            </div>

            <div class="form-group mt-4">
                <button name="addPub" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('pubForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Pubblicazioni presenti</h3>

<ul class="list-group mb-5">
    <?php
    for($i=0; $i<count($pubs); $i++) {
        echo "<li class='list-group-item d-flex justify-content-between'>{$pubs[$i]['pub_title']}<a href='../../public/admin/index.php?delete_pub&id={$pubs[$i]['pub_id']}' role='button' class='btn btn-danger'>Elimina</a></li>";
    }
    ?>
</ul>

<script src="../../public/js/validate.js"></script>