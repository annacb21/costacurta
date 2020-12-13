<?php $data = get_admin_data(); ?>

<form id="accountForm" action="" method="POST">

    <?php update_account(); ?>

    <div class="col-md-6">

        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" value="<?php echo $data['username']; ?>" autocomplete="off"> 
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email']; ?>">    
        </div>

        <div class="form-group">
            <button name="update" type="submit" class="btn btn-warning">Modifica</button> 
            <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('accountForm')">Annulla</button>           
        </div> 

    </div>

</form>

<?php display_message(); ?>

<form name="updateForm" id="pswForm" action="" method="POST" onSubmit="return validatePassword();" novalidate>

    <?php update_password($data['password']); ?>

    <div class="col-md-6">

        <h3 class="py-3">Password</h3>

        <div class="form-group">
            <label for="current_psw" class="form-label">Password attuale</label>
            <input type="password" name="current_psw" class="form-control" id="current_psw" required>
            <div id="current_psw_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <label for="new_psw" class="form-label">Nuova password</label>
            <input type="password" name="new_psw" class="form-control" id="new_psw" required>
            <div id="new_psw_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <label for="confirm_psw" class="form-label">Conferma nuova password</label>
            <input type="password" name="confirm_psw" class="form-control" id="confirm_psw" required>
            <div id="confirm_psw_msg" class="feedback"></div>
        </div>

        <div class="form-group">
            <button name="updatePsw" type="submit" class="btn btn-warning">Modifica</button> 
            <button name="reset" type="reset" class="btn btn-outline-secondary" onClick="formReset('pswForm')">Annulla</button>           
        </div> 

    </div>

</form>

<script>

    function validatePassword() {

        var output = true;
        var currentPassword = document.updateForm.current_psw;
        var newPassword = document.updateForm.new_psw;
        var confirmPassword = document.updateForm.confirm_psw;

        if(!currentPassword.value) {
            currentPassword.focus();
            document.getElementById("current_psw_msg").innerHTML = "Inserisci la password attuale";
            output = false;
        }
        if(!newPassword.value) {
            newPassword.focus();
            document.getElementById("new_psw_msg").innerHTML = "Inserisci la nuova password";
            output = false;
        }
        if(!confirmPassword.value) {
            confirmPassword.focus();
            document.getElementById("confirm_psw_msg").innerHTML = "Conferma la nuova password";
            output = false;
        }

        if(newPassword.value != confirmPassword.value) {
            newPassword.value = "";
            confirmPassword.value = "";
            newPassword.focus();
            document.getElementById("confirm_psw_msg").innerHTML = "Le password non corrispondono";
            output = false;
        } 	

        return output;
    }

    function formReset(id) {
        document.getElementById(id).reset();
    }

</script>