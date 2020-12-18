<nav class="navbar navbar-expand-lg navbar-light mb-5">

    <!-- navbar brand or logo -->
    <a class="navbar-brand" href="../public/index.php">Andrea Costacurta</a>

    <!-- hamburger menu button on smaller screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navbar items on the right -->
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item px-3">
                <a href="../public/index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item px-3">
                <a href="../public/index.php?chisono" class="nav-link">Chi sono</a>
            </li>
            <li class="nav-item px-3">
                <a href="../public/index.php?aree" class="nav-link">Aree di intervento</a>
            </li>
            <li class="nav-item dropdown px-3">
                <a href="#" class="nav-link dropdown-toggle" id="studioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lo studio</a>
                <ul class="dropdown-menu" aria-labelledby="studioDropdown">
                    <?php
                        for($i = 0; $i < count($studi); $i++) {
                            echo "<li><a class='dropdown-item' href='../public/index.php?studio&id={$studi[$i]['studio_id']}'>{$studi[$i]['city']}</a></li>";
                        }
                     ?>
                </ul>
            </li>
            <li class="nav-item px-3">
                <a href="../public/index.php?articoli" class="nav-link">Articoli</a>
            </li>
            <li class="nav-item px-3">
                <a href="../public/index.php?contatti" class="nav-link">Contatti</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?login" class="nav-link"><i class="fas fa-user"></i></a>
            </li>
        </ul>
    </div>
</nav>

<script src="../public/js/active.js"></script>