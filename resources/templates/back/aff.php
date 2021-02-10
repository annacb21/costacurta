<?php display_message(); ?>
<?php $links = get_links(); ?>

<h3 class="my-5 ml-3">Affiliazioni</h3>
<div class="card mb-5">
    <div class="card-header h5">Aggiungi affiliazione</div>
    <div class="card-body">
        <form id="affForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_aff(); ?>

            <div class="form-group">
                <label for="nome" class="form-label">Nome affiliato</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
                <div class="invalid-feedback">Inserire il nome dell'affiliato</div>
            </div>

            <div class="form-group">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" required>
                <small id="linkHelp" class="form-text text-muted">Il link alla pagina web dell'affiliato</small>
                <div class="invalid-feedback">Inserire il link al sito web dell'affiliato</div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="logo">Carica logo ...</label>
                <input type="file" class="form-control-file" id="logo" name="logo" required>
                <div class="invalid-feedback">Inserire il logo dell'affiliato</div>
            </div>

            <div class="form-group mt-4">
                <button name="addAff" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('affForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<div class="row mb-5 border-bottom">
    <?php get_aff_thumb(); ?>
</div>

<h3 class="my-5 ml-3">Link utili</h3>
<div class="card mb-5">
    <div class="card-header h5">Aggiungi link utile</div>
    <div class="card-body">
        <form id="linkForm" action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <?php add_link(); ?>

            <div class="form-group">
                <label for="nome" class="form-label">Nome pagina web</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
                <div class="invalid-feedback">Inserire il nome della pagina web</div>
            </div>

            <div class="form-group">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" required>
                <div class="invalid-feedback">Inserire il link al sito web</div>
            </div>

            <div class="form-group mt-4">
                <button name="addLink" type="submit" class="btn btn-primary btn-lg mr-3">Aggiungi</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('linkForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<ul class="list-group mb-5">
    <?php
    for($i=0; $i<count($links); $i++) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>{$links[$i]['link_name']}<a href='../admin/index.php?delete_link&id={$links[$i]['link_id']}' role='button' class='btn btn-danger'>Elimina</a></li>";
    }
    ?>
</ul>

<script src="../js/validate.js"></script>