<?php

    if(isset($_GET['id'])) {

        $query = query("SELECT * FROM articoli WHERE art_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        $row = fetch_array($query);

        $id = $row['art_id'];
        $autore = $row['autore'];
        $titolo = $row['titolo'];
        $articolo = $row['corpo'];
        $data = $row['art_data'];
        $foto = $row['foto'];
        $foto_img = display_image($row['foto']);
        
    }

?>

<div class="card">
    <div class="card-body">
        <form id="artForm" action="" method="POST" enctype="multipart/form-data">

            <?php update_art(); ?>

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="autore" class="form-label">Autore</label>
                        <input type="text" name="autore" class="form-control" id="autore" required data-validation-required-message="Inserire l'autore dell'articolo" value="<?php echo $autore; ?>">
                    </div>

                    <div class="form-group">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" name="titolo" class="form-control" id="titolo" required data-validation-required-message="Inserire un titolo per l'articolo" value="<?php echo $titolo; ?>">
                    </div>

                    <div class="form-group">
                        <input type="file" id="foto" name="foto"></br>
                        <img width="200" src="../../resources/<?php echo $foto_img; ?>" alt="" class="pt-3">
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="articolo" class="form-label">Articolo</label>
                        <textarea class="form-control" name="articolo" id="articolo" rows="10" cols="40" required data-validation-required-message="Inserisci il testo dell'articolo"><?php echo $articolo; ?></textarea>
                    </div>

                    <div class="form-group mt-5">
                        <button name="update" type="submit" class="btn btn-warning">Modifica</button> 
                        <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('artForm')">Cancella</button>           
                    </div> 

                </div>
            </div>

        </form>
    </div>
</div>

<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#deleteArtModal">Elimina articolo</button>

<div class="modal fade" role="dialog" id="deleteArtModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Elimina articolo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <p>Sei sicuro di voler eliminare questo articolo?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
            <a href="../../public/admin/index.php?delete_art&id=<?php echo $id; ?>&img=<?php echo $foto; ?>" role="button" class="btn btn-danger">Conferma eliminazione</a>
        </div>
        </div>
    </div>
</div>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?articles" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>