<?php 
    $account = get_admin_data(); 
?>

<div class="row">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header h5">Account</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold">Username </span><?php echo $account['username']; ?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold">Email </span><?php echo $account['email']; ?>
                    </li>
                </ul>
                <a class="btn btn-info btn-lg mt-4" href="../../public/admin/index.php?account">Visualizza account</a>
            </div>
        </div>
    </div>

</div>

