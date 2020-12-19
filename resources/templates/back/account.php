<?php $data = get_admin_data(); ?>

<div class="card">
    <div class="card-header">Dati personali</div>
    <div class="card-body">
        <h5 class="card-title">Andrea Costacurta</h5>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Username: </span><?php echo $data['username']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Email: </span><?php echo $data['email']; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="btn btn-outline-warning btn-lg" href="../../public/admin/index.php?edit_account">Modifica</a>
            </li>
        </ul>
    </div>
</div>