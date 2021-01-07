<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Lo studio del dott. Andrea Costacurta, psichiatra e psicoterapeuta a Padova">
        <meta name="keywords" content="Andrea Costacurta, psichiatra, psicoterapeuta, Padova, PD">
        <meta name="author" content="Anna Cisotto Bertocco">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Cache-control" content="no-cache" />
        <title>Andrea Costacurta</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Fontawesome icons -->
        <script src="https://kit.fontawesome.com/8284f330c3.js" crossorigin="anonymous"></script>
        <!-- Animation library Animate -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    </head>
    <body>

        <!-- NAVBAR -->
        <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

        <div class="pb-5 main">

            <!-- MAIN CONTENT -->
            <?php show_main_content() ?>
        </div>

        <!-- FOOTER -->
        <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
      
    </body>
</html>