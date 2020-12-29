<?php $profile = get_profile(); ?>

<footer class="footer h-auto py-5 bg-primary text-white">

    <div class="row mx-0">
        <div class="col-lg-4 col-sm-12 text-center">
            <p class="font-weight-bold h5">Dott. Andrea Costacurta</p>
            <p>Psichiatra Psicoterapeuta</p>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <?php
                for($i = 0; $i < count($studi); $i++) {
                    echo "<p><span class='h6 font-weight-bold text-uppercase'>{$studi[$i]['city']}:</span>  {$studi[$i]['adress']}, CAP {$studi[$i]['cap']}</p>";
                }
            ?>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
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