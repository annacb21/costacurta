<?php

    if(isset($_GET['id']) && isset($_GET['img'])) {

        $query = query("DELETE FROM slides WHERE slide_id = '{$_GET['id']}' ");
        confirm($query);

        $img_path = UPLOADS . DS . $_GET['img'];
        unlink($img_path);

        set_message("Foto eliminata con successo", "alert-success");
        redirect("../../public/admin/index.php?gallery");

    }
    else {

        redirect("../../public/admin/index.php?gallery");

    }

?>