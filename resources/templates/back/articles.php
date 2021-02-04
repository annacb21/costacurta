<?php display_message(); ?>

<div class="card mb-5">
    <div class="card-header h5">Pubblica evento, news o libro</div>
    <div class="card-body">
        <form id="artForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_art(); ?>

            <div class="form-group">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" required>
                <small id="titleHelp" class="form-text text-muted">Per un evento o una news inserire il titolo dell'evento o l'argomento della news, per un libro inserire il titolo del libro</small>
                <div class="invalid-feedback">Inserire un titolo (nome dell'evento, titolo del libro, argomento della news ...)</div>
            </div>

            <div class="form-group">
                <label for="sub" class="form-label">Sottotitolo</label>
                <input type="text" name="sub" class="form-control" id="sub" required>
                <small id="subHelp" class="form-text text-muted">Per un evento inserire la data prevista dell'evento, per un libro inserire l'autore del libro, una news scrivere una breve descrizione della news</small>
                <div class="invalid-feedback">Inserire un sottotitolo (data dell'evento, autore del libro...)</div>
            </div>

            <div class="form-group">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" required>
                <small id="linkHelp" class="form-text text-muted">Il link alla pagina web dell'evento o del libro</small>
                <div class="invalid-feedback">Inserire il link al sito web dell'evento/libro</div>
            </div>

            <div class="form-group">
                <label for="tag">Tag</label>
                <select class="custom-select" id="tag" name="tag" required>
                    <option selected value="2">Evento</option>
                    <option value="3">Libro</option>
                    <option value="1">News</option>
                </select>
                <div class="invalid-feedback">Scegliere il tag</div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="artFoto">Carica foto ... (opzionale)</label>
                <input type="file" class="form-control-file" id="artFoto" name="artFoto">
            </div>

            <div class="form-group mt-4">
                <button name="addArt" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('artForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Eventi pubblicati</h3>
<div class="row mb-5">
    <?php get_art_thumb(); ?>
</div>

<script src="../../public/js/validate.js"></script>