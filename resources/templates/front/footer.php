<?php $contatti = get_contacts(); ?>

<footer class="bg-color page">

    <div class="row py-4">
        <div class="col-lg-4">
            <a href="../public/index.php" class="d-inline-block">
                <img src="../public/images/logo2.svg" alt="logo" class="d-inline-block align-top logo-footer pb-5">
            </a>
        </div>
        <div class="col-lg-4 px-5">
            <p class="font-weight-bold pb-3 footer-border">Contatti</p>
            <div class="py-4">
                <i class="fas fa-at"></i><p class="d-inline-block pl-4 mb-0"><?php echo $contatti[0]['cont_value']; ?></p>
            </div>
            <div>
                <i class="fas fa-phone"></i><p class="d-inline-block pl-4 mb-0"><?php echo $contatti[1]['cont_value']; ?></p>
            </div>
        </div>
        <div class="col-lg-4">
            <p class="font-weight-bold pb-3 footer-border">Gli studi</p>
            <?php footer_study(); ?>
        </div>
    </div>
    <p class="privacy text-center pt-3">www.andreacostacurta.it © 2021 - P.IVA 03207300249 - Privacy Policy</p>
    <div>
        <a role="button" class="login-btn" href="../public/index.php?login">Login</a>
    </div>
</footer>