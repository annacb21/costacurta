<?php

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';


//*************************** SYSTEM FUNCTIONS ****************************
// fa una query al database
function query($sql){

    global $connection;

    return mysqli_query($connection, $sql);

}

// conferma la query
function confirm($result){

    global $connection;

    if(!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

}


function escape_string($string) {

    global $connection;

    return mysqli_real_escape_string($connection, $string);

}

function fetch_array($result){

    return mysqli_fetch_array($result);

}

// ritorna il path per le immagini
function display_image($image) {

    return "images" . DS . $image;

}

//*************************** FRONT FUNCTIONS ****************************

// mostra il contenuto del body della pagina dinamicamente
function show_main_content() {

    if($_SERVER['REQUEST_URI'] == "/costacurta/public/" || $_SERVER['REQUEST_URI'] == "/costacurta/public/index.php" ) {
        include(TEMPLATE_FRONT . "/main.php");
    }

    if(isset($_GET['chisono'])) {
        include(TEMPLATE_FRONT . "/chisono.php");
    }

    if(isset($_GET['aree'])) {
        include(TEMPLATE_FRONT . "/aree.php");
    }

    if(isset($_GET['studio'])) {
        include(TEMPLATE_FRONT . "/studio.php");
    }

    if(isset($_GET['articoli'])) {
        include(TEMPLATE_FRONT . "/articoli.php");
    }

    if(isset($_GET['contatti'])) {
        include(TEMPLATE_FRONT . "/contatti.php");
    }

    if(isset($_GET['login'])) {
        include(TEMPLATE_FRONT . "/login.php");
    }

}

// manda una email dal form della pagina dei contatti
function send_email() {

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $toEmail = "annacb21@gmail.com";

        $mail = new PHPMailer();

        /*
        Host: smtp.mailtrap.io
        Port: 25 or 465 or 587 or 2525
        Username: 7118daa26bcca3
        Password: d35b5a76b761b8
        Auth: PLAIN, LOGIN and CRAM-MD5
        TLS: Optional (STARTTLS on all ports)
        */

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '7118daa26bcca3';
        $mail->Password = 'd35b5a76b761b8';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom($email, $name);
        $mail->addAddress('annacb21@gmail.com', 'Anna');
        $mail->Subject = 'New message from your website';
        $mail->isHTML(true);
        $mail->Body = $message;

        if($mail->send()) {
            echo "inviata";
        } 
        else {
            $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
        }
        

    }

}



?>