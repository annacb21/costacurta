<?php display_message(); ?>

<div class="card my-5">
    <div class="card-header h5">Aggiungi citazione alla homepage</div>
    <div class="card-body">
        <form id="quoteForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_quote(); ?>

            <div class="form-group">
                <label for="cit" class="form-label">Testo citazione</label>
                <input type="text" name="cit" class="form-control" id="cit" required>
                <div class="invalid-feedback">Inserire il testo della citazione</div>
            </div>

            <div class="form-group">
                <label for="autore" class="form-label">Autore citazione</label>
                <input type="text" name="autore" class="form-control" id="autore" required>
                <div class="invalid-feedback">Inserire l'autore della citazione</div>
            </div>

            <div class="form-group mb-3">
                <input type="file" class="form-control-file" id="quoteFoto" name="quoteFoto" required>
                <div class="invalid-feedback">Scegli una foto per la citazione</div>
            </div>

            <div class="form-group mt-4">
                <button name="addQuote" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('quoteForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>


<h3 class="my-5 ml-3">Citazioni presenti</h3>

<!-- thumbs -->
<p class="text-uppercase font-weight-bold ml-3">homepage</p>
<div class="row mb-3 border-bottom">
    <?php get_quote_thumbnails('0'); ?>
</div>

<div class="row mt-4 border-bottom">
    <?php get_quote_thumbnails('1'); ?>
    <?php get_quote_thumbnails('2'); ?>
    <?php get_quote_thumbnails('3'); ?>
    <?php get_quote_thumbnails('4'); ?>
    <?php get_quote_thumbnails('5'); ?>
</div>

<script src="../js/validate.js"></script>
