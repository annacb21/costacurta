<?php

    if(isset($_GET['id'])) {

        $query = query("SELECT * FROM aree WHERE area_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        $row = fetch_array($query);

        $nome = $row['area_name'];
        $desc = $row['area_desc'];

    }

?>

<form id="areaEditForm" action="" method="POST">

    <?php update_area(); ?>

    <div class="col-lg-6 col-md-12">

        <div class="form-group">
            <label for="name_area" class="form-label">Nome area di intervento</label>
            <input type="text" name="name_area" class="form-control" id="name_area" required data-validation-required-message="Dare un nome all'area di intervento" value="<?php echo $nome; ?>">
        </div>

        <div class="form-group">
            <label for="desc" class="form-label">Descrizione area di intervento</label>
            <textarea class="form-control" name="desc" id="desc" rows="5" required data-validation-required-message="Scrivi una breve descrizione dell'area di intervento"><?php echo $desc; ?></textarea>
        </div>

        <div class="form-group mt-4">
            <button name="update" type="submit" class="btn btn-warning">Modifica</button> 
            <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('areaEditForm')">Cancella</button>           
        </div> 

    </div>

</form>

<a class="btn btn-dark btn-lg my-5 ml-3" href="../../public/admin/index.php?areas" role="button">Indietro</a>

<script src="../../public/js/validate.js"></script>