<nav class="navbar navbar-expand-xl navbar-light page">

    <!-- navbar logo -->
    <a class="navbar-brand" href="../public/index.php">
        <img src="../public/images/logo.svg" alt="logo" class="d-inline-block align-top logo">
    </a>

    <!-- hamburger menu button on smaller screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navbar links -->
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../public/index.php" class="nav-link px-4">Home</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?chisono" class="nav-link px-4">Qualcosa su di me</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?aree" class="nav-link px-4">Aree di intervento</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?gallery" class="nav-link px-4">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?articoli&tag=0" class="nav-link px-4">News</a>
            </li>
            <li class="nav-item">
                <a href="../public/index.php?contatti" class="nav-link px-4">Contatti</a>
            </li>
            <?php
                if(isset($_SESSION['user'])) {
                    echo "<li class='nav-item'><a href='../public/admin/index.php' class='nav-link px-4'>Admin</a></li>";
                }
             ?>
        </ul>
    </div>

</nav>

<script src="../public/js/active.js"></script>