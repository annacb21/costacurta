<?php $studi = get_studi(); ?>
<?php $profile = get_profile(); ?>

<footer class="footer h-auto text-white page">

    <div class="row mx-0 px-5">
        <div class="col-lg-4 px-5">
            <p class="font-weight-bold h5">Dott. Andrea Costacurta</p>
            <p>Psichiatra - Psicoterapeuta - Psicoanalista</p>
        </div>
        <div class="col-lg-4 px-5">
            <p class="font-weight-bold">Gli studi</p>
            <?php
                for($i = 0; $i < count($studi); $i++) {
                    echo "<p><span class='text-uppercase pr-2'>{$studi[$i]['city']}:</span>{$studi[$i]['studio_name']}, {$studi[$i]['adress']}</p>";
                }
            ?>
        </div>
        <div class="col-lg-4 px-5">
            <p class="font-weight-bold">Contatti</p>
            <div>
                <i class="fas fa-phone-square"></i><p class="d-inline-block pl-4"><?php echo $profile['pro_tel']; ?></p>
            </div>
            <div>
                <i class="fas fa-envelope-square"></i><p class="d-inline-block pl-4"><?php echo $profile['pro_email']; ?></p>
            </div>
        </div>
    </div>
    <div>
        <a role="button" class="login-btn" href="../public/index.php?login">Login</a>
    </div>
</footer>