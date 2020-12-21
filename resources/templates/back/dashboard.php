<?php 
    $account = get_admin_data(); 
    $sedi = get_studi();
    $tot_foto = 0;
    for($i = 0; $i < count($sedi); $i++) {
        $tot_foto += get_tot_slides($sedi[0]['studio_id']);
    }
    $tot_aree = get_tot_areas();
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

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header h5">Gallery foto</div>
            <div class="card-body">
                <p class="pb-1">Hai<br><span class="h4 font-weight-bold"><?php echo $tot_foto; ?></span><br>attualmente caricate nella gallery.</p>
                <a class="btn btn-info btn-lg mt-4" href="../../public/admin/index.php?gallery">Visualizza gallery</a>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header h5">Aree di intervento</div>
            <div class="card-body">
                <p class="pb-1">Hai<br><span class="h4 font-weight-bold"><?php echo $tot_aree; ?></span><br>aree di intervento in totale nel sito.</p>
                <a class="btn btn-info btn-lg mt-4" href="../../public/admin/index.php?areas">Visualizza aree</a>
            </div>
        </div>
    </div>

</div>