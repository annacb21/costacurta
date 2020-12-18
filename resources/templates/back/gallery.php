<?php $studi = get_studi(); ?>

<h3 class="mb-4 ml-3">Aggiungi foto</h3>
<?php display_message(); ?>
<form name="slideForm" id="slideForm" action="" method="POST" enctype="multipart/form-data" onSubmit="return checkFile();" novalidate>

    <?php add_slide(); ?>

    <div class="col-md-6">

        <div class="form-group">
            <label for="title" class="form-label">Nome foto</label>
            <input type="text" name="title" placeholder="Nome foto" class="form-control" id="title" required data-validation-required-message="Dare un nome alla foto">
            <div id="title_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <label for="file" class="form-label">Carica foto</label>
            <input class="form-control" type="file" id="file" name="file">
            <div id="file_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <label for="study" class="form-label">Studio</label>
            <select class="form-select" name="study">
                <option value="">Scegli lo studio</option>
                <?php
                    for($i = 0; $i < count($studi); $i++) {
                        echo "<option value='{$studi[$i]['studio_id']}'>{$studi[$i]['city']}</option>";
                    }
                ?>
            </select>
            <div id="studio_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <button name="upload" type="submit" class="btn btn-warning">Aggiungi</button> 
            <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('slideForm')">Cancella</button>           
        </div> 

    </div>

</form>

<h3 class="my-5 ml-3">Foto presenti</h3>
<div class="row">
    <?php get_slides_thumbnails(); ?>
</div>

<script src="../../public/js/validate.js"></script>
