<?php display_message(); ?>

<div class="card">
    <div class="card-header h4">Pubblica nuovo articolo</div>
    <div class="card-body">
        <form name="artForm" id="artForm" action="" method="POST" enctype="multipart/form-data" onSubmit="return checkArt();" novalidate>

            <?php add_article(); ?>

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="autore" class="form-label">Autore</label>
                        <input type="text" name="autore" placeholder="Autore articolo" class="form-control" id="autore" required data-validation-required-message="Inserire l'autore dell'articolo">
                        <div id="autore_msg" class="feedback"></div>
                    </div>

                    <div class="form-group">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" name="titolo" placeholder="Titolo articolo" class="form-control" id="titolo" required data-validation-required-message="Inserire un titolo per l'articolo">
                        <div id="titolo_msg" class="feedback"></div>
                    </div>

                    <div class="form-group py-4">
                        <input type="file" id="foto" name="foto">
                        <div id="foto_msg" class="feedback"></div>
                    </div>

                    <div class="form-group">
                        <button name="publish" type="submit" class="btn btn-warning">Pubblica</button> 
                        <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('artForm')">Cancella</button>           
                    </div> 

                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="articolo" class="form-label">Articolo</label>
                        <textarea class="form-control" name="articolo" id="articolo" rows="10" cols="40" required data-validation-required-message="Inserisci il testo dell'articolo"></textarea>
                        <div id="art_msg" class="feedback"></div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Articoli presenti</h3>
<div class="row mb-5">
    <?php get_articles(); ?>
</div>

<script src="../../public/js/validate.js"></script>