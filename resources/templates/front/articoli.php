<!-- PAGE QUOTE -->
<?php get_page_quote(4); ?>

<!-- PAGE TITLE -->
<div class="page-title mt-4 bg-color">
    NEWS, EVENTI & LIBRI ...
    <div class="w-25 borderBottomLight pt-2"></div>
</div>

<!-- FILTERS --> 
<div class="mt-5 page">

    <div id="filterList">
        <button class="btn btn-lg rounded-pill active-filter filter" onclick="filterSelection('0')">Tutti</button>
        <button class="btn btn-lg rounded-pill filter" onclick="filterSelection('1')">News</button>
        <button class="btn btn-lg rounded-pill filter" onclick="filterSelection('2')">Eventi</button>
        <button class="btn btn-lg rounded-pill filter" onclick="filterSelection('3')">Libri</button>
    </div>
    
</div>

<!-- ARTICLES --> 
<div class="page">
    <?php get_articles_list(); ?>
</div>

<script src="../public/js/filter.js"></script>