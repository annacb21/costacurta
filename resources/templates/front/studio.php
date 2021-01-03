<?php $studio = get_studio_data($_GET['id']); ?>

<div class="page">
    <h1 class="subtitle mb-5">Lo studio di <?php echo $studio['city']; ?></h1>   
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <?php
                for($i = 1; $i < get_tot_slides($studio['studio_id']); $i++) {
                    echo "<li data-target='#carouselIndicators' data-slide-to='{$i}'></li>";
                }
             ?>
        </ol>
        <div class="carousel-inner">
            <?php get_active_slide($studio['studio_id']); ?>
            <?php get_slides($studio['studio_id']); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>