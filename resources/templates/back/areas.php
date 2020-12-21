<?php display_message(); ?>
<div class="card">
    <div class="card-header h4">Aggiungi area di intervento</div>
    <div class="card-body">
        <form name="areaForm" id="areaForm" action="" method="POST" onSubmit="return checkAreaForm();" novalidate>

            <?php add_area(); ?>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="name_area" class="form-label">Nome area di intervento</label>
                    <input type="text" name="name_area" placeholder="Nome area di intervento" class="form-control" id="name_area" required data-validation-required-message="Dare un nome all'area di intervento">
                    <div id="name_msg" class="feedback"></div>
                </div>

                <div class="form-group">
                    <label for="desc" class="form-label">Descrizione area di intervento</label>
                    <textarea class="form-control" name="desc" id="desc" rows="5" required data-validation-required-message="Scrivi una breve descrizione dell'area di intervento"></textarea>
                    <div id="desc_msg" class="feedback"></div>
                </div>

                <div class="form-group mt-4">
                    <button name="add" type="submit" class="btn btn-warning">Aggiungi</button> 
                    <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('areaForm')">Cancella</button>           
                </div> 

            </div>

        </form>
    </div>
</div>

<h3 class="my-5 ml-5">Aree di intervento presenti</h3>
<div class="row mb-5">
    <ul class="list-group ml-5">
        <?php get_areas(); ?>
    </ul>
</div>

<script src="../../public/js/validate.js"></script>