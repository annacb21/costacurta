<?php $quotes = get_tot_quotes(); ?>
<?php $pubs = get_tot_pub(); ?>
<?php $fotos = get_tot_foto(); ?>
<?php $video = get_tot_video(); ?>
<?php $news = get_tot_art(); ?>

<div class="row">
    <div class="col-lg-3 mb-3">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white h5">Citazioni<i class="fas fa-quote-left pl-4"></i></div>
            <div class="card-body">
                <h1><?php echo $quotes; ?><span class="h6 ml-3">citazioni in totale</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <div class="card border-success">
            <div class="card-header bg-success text-white h5">Pubblicazioni<i class="fas fa-book-open pl-4"></i></div>
            <div class="card-body">
                <h1><?php echo $pubs; ?><span class="h6 ml-3">pubblicazioni in totale</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <div class="card border-warning">
            <div class="card-header bg-warning text-white h5">Foto<i class="fas fa-image pl-4"></i></div>
            <div class="card-body">
                <h1><?php echo $fotos; ?><span class="h6 ml-3">foto in totale</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <div class="card border-danger">
            <div class="card-header bg-danger text-white h5">Video<i class="fas fa-youtube pl-4"></i></div>
            <div class="card-body">
                <h1><?php echo $video; ?><span class="h6 ml-3">video in totale</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <div class="card border-info">
            <div class="card-header bg-info text-white h5">News<i class="fas fa-newspaper pl-4"></i></div>
            <div class="card-body">
                <h1><?php echo $news; ?><span class="h6 ml-3">news in totale</span></h1>
            </div>
        </div>
    </div>
</div>

