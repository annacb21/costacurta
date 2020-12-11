<?php require_once("../../resources/config.php"); ?>

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
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- Fontawesome icons -->
        <script src="https://kit.fontawesome.com/8284f330c3.js" crossorigin="anonymous"></script>
        <style type="text/css">
            /* Chart.js */
            @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
        </style>
    </head>
    <body>

        <!-- NAVBAR -->
        <?php include(TEMPLATE_BACK . DS . "navbar.php"); ?>

        <div class="container-fluid">
            <div class="row">

                <!-- SIDENAV -->
                <?php include(TEMPLATE_BACK . DS . "sidenav.php"); ?>

                <!-- MAIN CONTENT -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2"><?php get_admin_h1(); ?></h1>
                    </div>
                    <?php show_admin_content() ?>
                </main>

            </div>
        </div>
      
    </body>
</html>