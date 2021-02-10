<?php
    if(isset($_GET['id'])) {
        $art = get_art($_GET['id']);
        if($art['art_tag'] == '1') {
            $activetag = "News";
            $tag1 = "Evento";
            $num1 = '2';
            $tag2 = "Libro";
            $num2 = '3';
        } 
        elseif($art['art_tag'] == '2') {
            $activetag = "Evento";
            $tag1 = "Libro";
            $num1 = '3';
            $tag2 = "News";
            $num2 = '1';
        } 
        elseif($art['art_tag'] == '3') {
            $activetag = "Libro";
            $tag1 = "Evento";
            $num1 = '2';
            $tag2 = "News";
            $num2 = '1';
        } 
    }
?>

<div class="card mb-5">
    <div class="card-body">
        <form id="editArtForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php edit_art($_GET['id']); ?>

            <div class="form-group">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" required value="<?php echo $art['art_title']; ?>">
                <small id="titleHelp" class="form-text text-muted">Per un evento o una news inserire il titolo dell'evento o l'argomento della news, per un libro inserire il titolo del libro</small>
                <div class="invalid-feedback">Inserire un titolo (nome dell'evento, titolo del libro, argomento della news ...)</div>
            </div>

            <div class="form-group">
                <label for="sub" class="form-label">Sottotitolo</label>
                <input type="text" name="sub" class="form-control" id="sub" required value="<?php echo $art['art_note']; ?>">
                <small id="subHelp" class="form-text text-muted">Per un evento inserire la data prevista dell'evento, per un libro inserire l'autore del libro, una news scrivere una breve descrizione della news</small>
                <div class="invalid-feedback">Inserire un sottotitolo (data dell'evento, autore del libro...)</div>
            </div>

            <div class="form-group">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" required value="<?php echo $art['art_link']; ?>">
                <small id="linkHelp" class="form-text text-muted">Il link alla pagina web dell'evento o del libro</small>
                <div class="invalid-feedback">Inserire il link al sito web dell'evento/libro</div>
            </div>

            <div class="form-group">
                <label for="tag">Tag</label>
                <select class="custom-select" id="tag" name="tag" required>
                    <option selected value="<?php echo $art['art_tag']; ?>"><?php echo $activetag; ?></option>
                    <option value="<?php echo $num1; ?>"><?php echo $tag1; ?></option>
                    <option value="<?php echo $num2; ?>"><?php echo $tag2; ?></option>
                </select>
                <div class="invalid-feedback">Scegliere il tag</div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="artFoto">Carica foto ... (opzionale)</label>
                <input type="file" class="form-control-file" id="artFoto" name="artFoto">
            </div>

            <div class="form-group mt-4">
                <button name="editArt" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('editArtForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../admin/index.php?articles" role="button">Indietro</a>

<script src="../js/validate.js"></script>