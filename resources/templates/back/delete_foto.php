<?php

    if(isset($_GET['id']) && isset($_GET['img'])) {

        $query = query("DELETE FROM foto WHERE foto_id = '{$_GET['id']}' ");
        confirm($query);

        $img_path = UPLOADS . DS . $_GET['img'];
        unlink($img_path);

        set_message("Foto eliminata con successo", "alert-success");
        redirect("../admin/index.php?gallery");

    }

?>