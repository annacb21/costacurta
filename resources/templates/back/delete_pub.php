<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM pubblicazioni WHERE pub_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Pubblicazione eliminata con successo", "alert-success");
        redirect("../../public/admin/index.php?pubs");

    }

?>