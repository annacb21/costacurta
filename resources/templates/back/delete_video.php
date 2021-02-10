<?php

    if(isset($_GET['id'])) {

        $query = query("DELETE FROM video WHERE video_id = '{$_GET['id']}' ");
        confirm($query);

        set_message("Video eliminato con successo", "alert-success");
        redirect("../admin/index.php?video");

    }

?>