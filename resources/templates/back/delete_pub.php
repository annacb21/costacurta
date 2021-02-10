<?php

    if(isset($_GET['id']) && isset($_GET['link'])) {

        $query = query("DELETE FROM pubblicazioni WHERE pub_id = '{$_GET['id']}' ");
        confirm($query);

        $link_path = UPLOADS . DS . $_GET['link'];
        unlink($link_path);

        set_message("Pubblicazione eliminata con successo", "alert-success");
        redirect("../admin/index.php?pubs");

    }

?>