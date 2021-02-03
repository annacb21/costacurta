<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM disturbi WHERE disturbo_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Disturbo eliminato con successo", "alert-success");
        redirect("../../public/admin/index.php?profile");

    }

?>