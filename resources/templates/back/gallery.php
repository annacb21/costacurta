<?php $studi = get_studi(); ?>
<?php display_message(); ?>
<div class="card">
    <div class="card-header h4">Aggiungi foto</div>
    <div class="card-body">
        <form name="slideForm" id="slideForm" action="" method="POST" enctype="multipart/form-data" onSubmit="return checkFile();" novalidate>

            <?php add_slide(); ?>

            <div class="col-lg-6 col-md-12">

                <div class="form-group">
                    <label for="title" class="form-label">Nome foto</label>
                    <input type="text" name="title" placeholder="Nome foto" class="form-control" id="title" required data-validation-required-message="Dare un nome alla foto">
                    <div id="title_msg" class="feedback"></div>
                </div>

                <div class="form-group">
                    <input type="file" id="file" name="file">
                    <div id="file_msg" class="feedback"></div>
                </div>

                <div class="form-group">
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

                <div class="form-group mt-5">
                    <button name="upload" type="submit" class="btn btn-warning">Aggiungi</button> 
                    <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('slideForm')">Cancella</button>           
                </div> 

            </div>

        </form>
    </div>
</div>

<h3 class="my-5 ml-3">Foto presenti</h3>
<div class="row mb-5">
    <?php get_slides_thumbnails(); ?>
</div>

<script src="../../public/js/validate.js"></script>
