<?php 
    $article = get_article($_GET['id']); 
    $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $article['art_data']);
?>

<div class="pb-5">
    <h1 class="subtitle"><?php echo $article['titolo']; ?></h1>
    <p class="text-muted pb-5">Pubblicato da <?php echo $article['autore']; ?> il <?php echo $data; ?></p>
    <p class="text-justify"><?php echo $article['corpo']; ?></p>
    <a href="../public/index.php?articoli" role="button" class="btn btn-outline-secondary mt-5">Indietro</a>
</div>