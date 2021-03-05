<nav class="navbar navbar-expand-xl navbar-light page">

    <!-- navbar logo -->
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="logo" class="d-inline-block align-top logo">
    </a>

    <!-- hamburger menu button on smaller screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navbar links -->
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="chisono.php" class="nav-link">Qualcosa su di me</a>
            </li>
            <li class="nav-item">
                <a href="aree.php" class="nav-link">Aree di intervento</a>
            </li>
            <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="articoli.php?tag=0" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a href="contatti.php" class="nav-link">Contatti</a>
            </li>
            <?php
                if(isset($_SESSION['user'])) {
                    echo "<li class='nav-item'><a href='admin/index.php' class='nav-link'>Admin</a></li>";
                }
             ?>
        </ul>
    </div>

</nav>

<script src="js/active.js"></script>