<?php $studi = get_studi(); ?>
<?php $contatti = get_contacts(); ?>

<div id="contatti" class="page">
    <h1 class="subtitle pb-4">Contatti</h1>
    <?php display_message(); ?>
    <div class="row">
        <div class="col-lg-6 col-md-12 pb-5">
            <h3 class="pb-4">Invia una email</h3>
            <form action="" method="POST">
                <?php send_email(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome e cognome</label>
                    <input type="text" name="name" placeholder="Nome e cognome" class="form-control" id="name" required data-validation-required-message="Inserire il proprio nome e cognome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required data-validation-required-message="Inserire una email valida">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Messaggio</label>
                    <textarea name="message" class="form-control" id="message" rows="10" placeholder="Scrivi qui il tuo messaggio" required data-validation-required-message="Inserire un messaggio"></textarea>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
        <div class="col-lg-6 col-md-12">
            <h3 class="pb-5">Recapiti</h3>
            <?php
                for($i = 0; $i < count($studi); $i++) {
                    echo "<p class='font-weight-bold'>Studio di {$studi[$i]['city']}: <span class='font-weight-normal'>{$studi[$i]['adress']}, CAP {$studi[$i]['cap']}</span></p>";
                }
            ?>
            <p class="font-weight-bold">Email: <span class="font-weight-normal"><?php echo $contatti[0]['cont_value']; ?></span></p>
            <p class="font-weight-bold">Telefono: <span class="font-weight-normal"><?php echo $contatti[1]['cont_value']; ?></span></p>
        </div>
    </div>

</div>