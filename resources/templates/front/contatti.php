<div id="contatti" class="pb-5">
    <h1 class="subtitle pb-4">Contatti</h1>

    <div class="row">
        <div class="col-lg-6">
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
        <div class="col-lg-6 pl-5 pt-4">
            <p class="font-weight-bold">Studio di Padova: <span class="font-weight-normal">Via Siracusa 63, CAP 35142</span></p>
            <p class="font-weight-bold">Studio di Thiene (VI): <span class="font-weight-normal">Via San Vincenzo 53,  CAP 36016</span></p>
            <p class="font-weight-bold">Email: <span class="font-weight-normal">costacurta.andrea@gmail.com</span></p>
            <p class="font-weight-bold">Telefono: <span class="font-weight-normal">049 7967235</span></p>
        </div>
    </div>

</div>