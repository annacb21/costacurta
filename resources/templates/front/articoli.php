<!-- PAGE QUOTE -->
<?php get_page_quote(4); ?>

<!-- PAGE TITLE -->
<div class="page-title mt-4 bg-color">
    NEWS, EVENTI & LIBRI ...
    <div class="w-25 borderBottomLight pt-2"></div>
</div>

<!-- FILTERS --> 
<div class="mt-5 page" id="articoli">

    <div id="filterList" class="mb-5">
        <a href="articoli.php?tag=0#articoli" class="btn rounded-pill filter">Tutti</a>
        <a href="articoli.php?tag=2#articoli" class="btn rounded-pill filter">Eventi</a>
        <a href="articoli.php?tag=3#articoli" class="btn rounded-pill filter">Libri</a>
        <a href="articoli.php?tag=1#articoli" class="btn rounded-pill filter">News</a>
    </div>
    <!-- ARTICLES --> 
    <?php show_articles(); ?>
    
</div>

<script src="js/filter.js"></script>