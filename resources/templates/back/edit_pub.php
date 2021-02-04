<?php
    if(isset($_GET['id'])) {
        $pub = get_pub($_GET['id']);
    }
?>

<div class="card">
    <div class="card-body">
        <form id="editPubForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php edit_pub($_GET['id']); ?>

            <div class="form-group">
                <label for="title" class="form-label">Titolo pubblicazione</label>
                <input type="text" name="title" class="form-control" id="title" required value="<?php echo $pub['pub_title']; ?>">
                <div class="invalid-feedback">Inserire il titolo della pubblicazione</div>
            </div>

            <div class="form-group">
                <label for="autore" class="form-label">Autore/i pubblicazione</label>
                <input type="text" name="autore" class="form-control" id="autore" required value="<?php echo $pub['pub_autor']; ?>">
                <div class="invalid-feedback">Inserire l'autore/i della pubblicazione</div>
            </div>

            <div class="form-group">
                <label for="sub" class="form-label">Sottotitolo pubblicazione (opzionale)</label>
                <input type="text" name="sub" class="form-control" id="sub" value="<?php echo $pub['pub_subtitle']; ?>">
            </div>

            <div class="form-group mb-3">
                <input type="file" class="form-control-file" id="pubLink" name="pubLink">
                <p><?php echo $pub['pub_link']; ?></p>
            </div>

            <div class="form-group mt-5">
                <button name="editPub" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('editPubForm')">Cancella</button>         
            </div> 

        </form>
    </div>
</div>


<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?pubs" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>