<?php

if(isset($_GET['id'])) {
    $quote = get_quote($_GET['id']);
    $img = display_image($quote['quote_img']);
}

?>

<div class="card my-5">
    <div class="card-header h5">Modifica citazione</div>
    <div class="card-body">
        <form id="editQuoteForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php edit_quote($quote['quote_id']); ?>

            <div class="form-group">
                <label for="cit" class="form-label">Testo citazione</label>
                <input type="text" name="cit" class="form-control" id="cit" value="<?php echo $quote['quote_text']; ?>" required>
                <div class="invalid-feedback">Inserire il testo della citazione</div>
            </div>

            <div class="form-group">
                <label for="autore" class="form-label">Autore citazione</label>
                <input type="text" name="autore" class="form-control" id="autore" value="<?php echo $quote['quote_author']; ?>" required>
                <div class="invalid-feedback">Inserire l'autore della citazione</div>
            </div>

            <img src="../../resources/<?php echo $img; ?>" alt="" class="w-25 img-fluid">
            
            <div class="form-group mb-3">
                <input type="file" class="form-control-file" id="quoteFoto">
                <label class="form-label" for="quoteFoto">Scegli foto...</label>
                <div class="invalid-feedback">Scegli una foto per la citazione</div>
            </div>

            <div class="form-group mt-4">
                <button name="editQuote" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('editQuoteForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?quotes" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>
