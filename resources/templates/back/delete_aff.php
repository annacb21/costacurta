<?php

    if(isset($_GET['id']) && isset($_GET['img'])) {

        $query = query("DELETE FROM affiliazioni WHERE aff_id = '{$_GET['id']}' ");
        confirm($query);

        $img_path = UPLOADS . DS . $_GET['img'];

        unlink($img_path);

        set_message("Affiliazione eliminata con successo", "alert-success");
        redirect("../admin/index.php?aff");

    }

?>