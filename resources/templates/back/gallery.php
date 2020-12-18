<h3 class="mb-4 ml-3">Aggiungi foto</h3>
<?php display_message(); ?>
<form name="slideForm" id="slideForm" action="" method="POST" enctype="multipart/form-data" onSubmit="return checkFile();" novalidate>

    <?php add_slide(); ?>

    <div class="col-md-6">

        <div class="form-group">
            <label for="title" class="form-label">Nome foto</label>
            <input type="text" name="title" placeholder="Nome foto" class="form-control" id="title" required data-validation-required-message="Dare un nome alla foto">
        </div>

        <div class="form-group">
            <label for="file" class="form-label">Carica foto</label>
            <input class="form-control" type="file" id="file" name="file">
            <div id="file_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <button name="upload" type="submit" class="btn btn-warning">Aggiungi</button> 
            <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('slideForm')">Cancella</button>           
        </div> 

    </div>

</form>

<h3 class="my-5 ml-3">Foto presenti</h3>

<script src="../../public/js/validate.js"></script>
