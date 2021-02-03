<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM servizi WHERE servizio_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Servizio eliminato con successo", "alert-success");
        redirect("../../public/admin/index.php?profile");

    }

?>