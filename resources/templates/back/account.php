<?php $data = get_admin_data(); ?>

<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <span class="font-weight-bold">Username: </span><?php echo $data['username']; ?>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <span class="font-weight-bold">Email: </span><?php echo $data['email']; ?>
    </li>
</ul>
<?php display_message(); ?>
<div class="card mt-5">
    <div class="card-header h5">Modifica username e email</div>
    <div class="card-body">
        <form id="accountForm" action="" method="POST" class="needs-validation" novalidate>
            <?php update_account(); ?>
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?php echo $data['username']; ?>" required>
                <div class="invalid-feedback">Inserire un nuovo username</div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email']; ?>" required>
                <div class="invalid-feedback">Inserire un'email valida</div>    
            </div>

            <div class="form-group mt-4">
                <button name="updateAccount" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('accountForm')">Cancella</button>           
            </div> 
        </form>
    </div>
</div>

<div class="card my-5">
    <div class="card-header h5">Modifica password</div>
    <div class="card-body">
        <form id="pswForm" action="" method="POST" class="needs-validation" novalidate>

            <?php update_password($data['password']); ?>

            <div class="form-group">
                <label for="current_psw" class="form-label">Password attuale</label>
                <input type="password" name="current_psw" class="form-control" id="current_psw" required>
                <div class="invalid-feedback">Inserire la password attuale</div>
            </div>

            <div class="form-group">
                <label for="new_psw" class="form-label">Nuova password</label>
                <input type="password" name="new_psw" class="form-control" id="new_psw" required>
                <div class="invalid-feedback">Inserire una nuova password</div>
            </div>

            <div class="form-group">
                <label for="confirm_psw" class="form-label">Conferma password</label>
                <input type="password" name="confirm_psw" class="form-control" id="confirm_psw" required>
                <div class="invalid-feedback">Conferma la nuova password</div>
            </div>

            <div class="form-group mt-4">
                <button name="updatePsw" type="submit" class="btn btn-primary btn-lg mr-3">Modifica</button> 
                <button name="reset" type="reset" class="btn btn-outline-secondary btn-lg" onClick="formReset('pswForm')">Cancella</button>           
            </div> 

        </form>
    </div>
</div>

<script src="../js/validate.js"></script>
