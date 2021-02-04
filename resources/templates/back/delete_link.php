<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM links WHERE link_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Link eliminato con successo", "alert-success");
        redirect("../../public/admin/index.php?aff");

    }

?>