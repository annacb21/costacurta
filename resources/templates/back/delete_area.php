<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM aree WHERE area_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Area eliminata con successo", "alert-success");
        redirect("../../public/admin/index.php?areas");

    }
    else {

        redirect("../../public/admin/index.php?areas");

    }

?>