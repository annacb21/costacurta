<?php

    if(isset($_GET['id']) && isset($_GET['img'])) {

        $query = query("DELETE FROM articoli WHERE art_id = '{$_GET['id']}' ");
        confirm($query);

        $img_path = UPLOADS . DS . $_GET['img'];

        if($_GET['img'] != 'empty-event.png') {
            unlink($img_path);
        }

        set_message("Articolo eliminato con successo", "alert-success");
        redirect("../admin/index.php?articles");

    }

?>