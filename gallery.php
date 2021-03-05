<?php require_once("resources/config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Dott. Andrea Costacurta, psichiatra, psicoterapeuta e psicoanalista a Padova">
        <meta name="keywords" content="Andrea Costacurta, Costacurta, Dott. Andrea Costacurta, psichiatra, psicoterapeuta, psicoanalista, Padova, PD">
        <meta name="author" content="Anna Cisotto Bertocco">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Cache-control" content="no-cache" />
        <title>Andrea Costacurta</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css" integrity="sha512-wCwx+DYp8LDIaTem/rpXubV/C1WiNRsEVqoztV0NZm8tiTvsUeSlA/Uz02VTGSiqfzAHD4RnqVoevMcRZgYEcQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" integrity="sha512-wYsVD8ho6rJOAo1Xf92gguhOGQ+aWgxuyKydjyEax4bnuEmHUt6VGwgpUqN8VlB4w50d0nt+ZL+3pgaFMAmdNQ==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js" integrity="sha512-BXASbMmKLu+RC5TDnkupyhvrjiOQXILh/5zgIS8k5JAC71a73lNweVEg/X+9XJQ7GK22PH9WpztY3zqrji+xrQ==" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js">        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8284f330c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    </head>
    <body>

        <!-- NAVBAR -->
        <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

        <div class="pb-5 main">
            <!-- MAIN CONTENT -->
            <?php include(TEMPLATE_FRONT . DS . "gallery.php"); ?>
        </div>

        <!-- UP BUTTON -->
        <button type="button" class="btn rounded-circle shadow btn-lg" id="upBtn" onclick="backToTop()"><i class="fas fa-chevron-up"></i></button>

        <!-- FOOTER -->
        <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

        <script src="js/scroll.js"></script>
      
    </body>
</html>