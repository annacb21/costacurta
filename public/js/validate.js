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
    var studio = document.slideForm.study;

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

    if(!studio.value) {
        studio.focus();
        document.getElementById("studio_msg").innerHTML = "Scegli uno studio";
        output = false;
    }

    return output;
}

function checkAreaForm() {
    var output = true;
    var nome = document.areaForm.name_area;
    var desc = document.areaForm.desc;

    if(!nome.value) {
        nome.focus();
        document.getElementById("name_msg").innerHTML = "Dai un nome all'area di intervento";
        output = false;
    }

    if(!desc.value) {
        desc.focus();
        document.getElementById("desc_msg").innerHTML = "Scrivi una breve descrizione dell'area di intervento";
        output = false;
    }

    return output;
}

function checkArt() {
    var output = true;
    var autore = document.artForm.autore;
    var titolo = document.artForm.titolo;
    var desc = document.artForm.desc;
    var articolo = document.artForm.articolo;
    var foto = document.artForm.foto;

    if(!autore.value) {
        autore.focus();
        document.getElementById("autore_msg").innerHTML = "Inserire l'autore dell'articolo";
        output = false;
    }

    if(!titolo.value) {
        titolo.focus();
        document.getElementById("titolo_msg").innerHTML = "Inserire un titolo per l'articolo";
        output = false;
    }

    if(!desc.value) {
        desc.focus();
        document.getElementById("desc_msg").innerHTML = "Scrivi una breve descrizione dell'articolo";
        output = false;
    }

    if(!articolo.value) {
        articolo.focus();
        document.getElementById("art_msg").innerHTML = "Inserisci il testo dell'articolo";
        output = false;
    }

    if(!foto.value) {
        foto.focus();
        document.getElementById("foto_msg").innerHTML = "Inserisci una foto per l'articolo";
        output = false;
    }

    return output;
}