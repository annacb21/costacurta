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

function checkFile() {
    var output = true;
    var file = document.slideForm.file;
    var file = document.slideForm.title;

    if(!file.value) {
        file.focus();
        document.getElementById("file_msg").innerHTML = "Seleziona una foto da caricare";
        output = false;
    }

    if(!title.value) {
        title.focus();
        document.getElementById("title_msg").innerHTML = "Dai un nome alla foto";
        output = false;
    }

    return output;
}