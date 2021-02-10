<?php display_message(); ?>

<div class="card mb-5">
    <div class="card-header h5">Aggiungi foto</div>
    <div class="card-body">
        <form id="fotoForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_foto(); ?>

            <div class="form-group">
                <label for="name" class="form-label">Nome foto (opzionale)</label>
                <input type="text" name="name" class="form-control" id="name">
                <div class="invalid-feedback">Inserire il nome della foto</div>
            </div>

            <div class="form-group">
                <label for="cat">Categoria gallery foto</label>
                <select class="custom-select" id="cat" name="cat" required>
                    <option selected value="padova">Padova</option>
                    <option value="thiene">Thiene</option>
                    <option value="chioggia">Chioggia</option>
                    <option value="suggestioni">Suggestioni</option>
                </select>
                <div class="invalid-feedback">Scegliere la categoria della foto</div>
            </div>

            <div class="form-group mb-3">
                <input type="file" class="form-control-file" id="foto" name="foto" required>
                <div class="invalid-feedback">Scegli una foto ...</div>
            </div>

            <div class="form-group mt-5">
                <button name="addFoto" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('fotoForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Foto presenti</h3>

<p class="text-uppercase font-weight-bold ml-3">Padova</p>
<div class="row mb-5 border-bottom">
    <?php get_foto_thumb('padova'); ?>
</div>

<p class="text-uppercase font-weight-bold ml-3">Thiene</p>
<div class="row mb-5 border-bottom">
    <?php get_foto_thumb('thiene'); ?>
</div>

<p class="text-uppercase font-weight-bold ml-3">Chioggia</p>
<div class="row mb-5 border-bottom">
    <?php get_foto_thumb('chioggia'); ?>
</div>

<p class="text-uppercase font-weight-bold ml-3">Suggestioni</p>
<div class="row mb-5 border-bottom">
    <?php get_foto_thumb('suggestioni'); ?>
</div>

<script src="../js/validate.js"></script>
