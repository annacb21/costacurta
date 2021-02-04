<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//*************************** SYSTEM FUNCTIONS ****************************

// redirect to a page
function redirect($location) {

    return header("Location: $location ");

}

// crea un messaggio
function set_message($msg, $alert_type) {

    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
        $_SESSION['alert'] = $alert_type;
    }
    else {
        $msg = "";
        $alert_type = "";
    }

}

// mostra un messaggio
function display_message() {

if(isset($_SESSION['message']) && isset($_SESSION['alert'])) {
    
$alert = <<<DELIMETER

<div class="alert {$_SESSION['alert']} w-50 text-center mx-auto" role="alert">
    {$_SESSION['message']}
</div>

DELIMETER;

echo $alert;

unset($_SESSION['message']);
}

}

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

    return "uploads" . DS . $image;

}

// mostra l'anteprima di un testo
function anteprima($txt, $lung_max) {

    return (count($words = explode(' ', $txt)) > $lung_max) ? implode(' ', array_slice($words, 0, $lung_max)) . "..." : $txt;

}

//*************************** GETTERS ****************************

// getter per i dati degli studi
function get_studi() {

    $query = query("SELECT * FROM studi");
    confirm($query);

    $studi = [];

    while($row = fetch_array($query)) {
        array_push($studi, $row);
    }

    return $studi;

}

// getter per i dati degli studi
function get_contacts() {

    $query = query("SELECT * FROM contatti");
    confirm($query);

    $contatti = [];

    while($row = fetch_array($query)) {
        array_push($contatti, $row);
    }

    return $contatti;

}

// getter per i dati dell'admin
function get_admin_data() {

    $query = query("SELECT * FROM users WHERE user_id = '{$_SESSION['user']}' ");
    confirm($query);

    $row = fetch_array($query);
    return $row;

}

// ritorna il numero di quotes
function get_tot_quotes() {

    $query = query("SELECT COUNT(*) as total FROM quotes");
    confirm($query);

    $row = fetch_array($query);
    return $row['total'];

}

// ritorna il numero di articoli
function get_tot_art() {

    $query = query("SELECT COUNT(*) as total FROM articoli");
    confirm($query);

    $row = fetch_array($query);
    return $row['total'];

}

// ritorna il numero di video
function get_tot_video() {

    $query = query("SELECT COUNT(*) as total FROM video");
    confirm($query);

    $row = fetch_array($query);
    return $row['total'];

}

// getter per i dati del profilo
function get_profile() {

    $query = query("SELECT * FROM profilo ORDER BY pro_id DESC LIMIT 1");
    confirm($query);

    $row = fetch_array($query);
    return $row;

}

// getter quote
function get_quote($id) {

    $query = query("SELECT * FROM quotes WHERE quote_id = $id");
    confirm($query);

    $row = fetch_array($query);
    return $row;

}

// getter articolo
function get_art($id) {

    $query = query("SELECT * FROM articoli WHERE art_id = $id");
    confirm($query);

    $row = fetch_array($query);
    return $row;

}

// getter quote
function get_pub($id) {

    $query = query("SELECT * FROM pubblicazioni WHERE pub_id = $id");
    confirm($query);

    $row = fetch_array($query);
    return $row;

}

// getter per le pubblicazioni
function get_pubs() {

    $query = query("SELECT * FROM pubblicazioni");
    confirm($query);

    $pubs = [];

    while($row = fetch_array($query)) {
        array_push($pubs, $row);
    }

    return $pubs;

}

// getter per i disturbi
function get_dist() {

    $query = query("SELECT * FROM disturbi");
    confirm($query);

    $dist = [];

    while($row = fetch_array($query)) {
        array_push($dist, $row);
    }

    return $dist;

}

// getter per i servizi
function get_serv() {

    $query = query("SELECT * FROM servizi");
    confirm($query);

    $serv = [];

    while($row = fetch_array($query)) {
        array_push($serv, $row);
    }

    return $serv;

}

// getter per link utili
function get_links() {

    $query = query("SELECT * FROM links");
    confirm($query);

    $links = [];

    while($row = fetch_array($query)) {
        array_push($links, $row);
    }

    return $links;

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

    if(isset($_GET['gallery'])) {
        include(TEMPLATE_FRONT . "/gallery.php");
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

    if(isset($_GET['privacy'])) {
        include(TEMPLATE_FRONT . "/privacy.php");
    }

}

// manda una email dal form della pagina dei contatti
function send_email($page) {

    require '../vendor/autoload.php';

    if(isset($_POST['sendEmail'])) {

        $name = $_POST['name'];
        $cognome = $_POST['cognome'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $toEmail = "annacb21@gmail.com"; /* costacurta.andrea@gmail.com */

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.mailtrap.io'; /* smtp.gmail.com */
        $mail->Port = 2525; /* 587 */
        $mail->SMTPAuth = true;
        $mail->Username = '7118daa26bcca3'; /* $toEmail */
        $mail->Password = 'd35b5a76b761b8'; /* costacurta psw */
        $mail->SMTPSecure = 'tls'; /* PHPMailer::ENCRYPTION_STARTTLS */

        $mail->setFrom($email, $name . " " . $cognome);
        $mail->addAddress('annacb21@gmail.com', 'Anna'); /* costacurta.andrea@gmail.com */
        $mail->Subject = 'Messaggio da ' . $name . " " . $cognome . ' recapito: ' . $phone;
        $mail->isHTML(true);
        $mail->Body = $message;

        if($mail->send()) {
            set_message("La tua email è stata inviata con successo", "alert-success");
        } 
        else {
            set_message("Oops, qualcosa è andato storto: " . $mail->ErrorInfo, "alert-danger");  
        }

        if($page == 'home') {
            redirect("../public/index.php#prenotazioni");
        }
        elseif($page == 'contatti') {
            redirect("../public/index.php?contatti#contatto");
        }
    }

}

// fa il login dell'admin
function login() {

    if(isset($_POST['login'])) {

        $username = escape_string($_POST['username']);
        $psw = escape_string($_POST['psw']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' LIMIT 1");
        confirm($query);

        $row = fetch_array($query);

        if(mysqli_num_rows($query) == 0 || password_verify($psw, $row['password']) === false) {
            set_message("La tua password o il tuo username sono sbagliati", "alert-danger");
            redirect("../public/index.php?login");
        }
        else {
            $_SESSION['user'] = $row['user_id'];
            redirect("admin/");
        }

    }

}

// ritorna la slide (foto) corrente
function get_active_quote() {

$query = query("SELECT * FROM quotes WHERE quote_page = 0 ORDER BY quote_id DESC LIMIT 1");
confirm($query);

$row = fetch_array($query);

$img = display_image($row['quote_img']);

$quote = <<<DELIMETER

<div class="carousel-item active" data-interval="15000">
    <div class='row bg-color align-items-center'>
        <div class='col-lg-6 blockquote mb-0'>
            <p class="quote">{$row['quote_text']}</p>
            <p class="blockquote-footer">{$row['quote_author']}</p>
        </div>
        <div class='col-lg-6 quote-image'>
            <img src="../resources/{$img}" alt="{$row['quote_img']}" class="float-right">
        </div>
    </div>
</div>

DELIMETER;

echo $quote;


}

// getter per le slide (foto) 
function get_quotes() {

$query = query("SELECT * FROM quotes WHERE quote_page = 0 AND quote_id NOT IN (SELECT MAX(quote_id) FROM quotes WHERE quote_page = 0 ORDER BY quote_id DESC) ORDER BY quote_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['quote_img']);

$quote = <<<DELIMETER

<div class="carousel-item" data-interval="15000">
    <div class='row bg-color align-items-center'>
        <div class='col-lg-6 blockquote mb-0'>
            <p class="quote">{$row['quote_text']}</p>
            <p class="blockquote-footer">{$row['quote_author']}</p>
        </div>
        <div class='col-lg-6 quote-image'>
            <img src="../resources/{$img}" alt="{$row['quote_img']}" class="float-right">
        </div>
    </div>
</div>

DELIMETER;

echo $quote;
    
}

}

// mostra gli studi nel footer
function footer_study() {

$studi = get_studi();

for($i = 0; $i < count($studi); $i++) {
$s = <<<DELIMETER

<div class="row align-items-center">
    <div class="col-lg-1 px-0">
        <i class="fas fa-map-marker-alt"></i>
    </div>
    <div class="col-lg-11 px-0">
        <p class="font-weight-bold mb-0">{$studi[$i]['studio_name']}</p>
        <p>{$studi[$i]['studio_adress']}</p>
    </div>
</div>

DELIMETER;

echo $s;
}

}

// ritorna lista link utili
function link_utili() {

$links = get_links();

for($i = 0; $i < count($links); $i++) {
$s = <<<DELIMETER

<div class="py-3">
    <i class="fas fa-link"></i>
    <a href="{$links[$i]['link_path']}" target="_blank" class="dark-link">
        <p class="d-inline-block pl-4 mb-0 font-weight-bold">{$links[$i]['link_name']} :<span class="pl-3 font-weight-normal">{$links[$i]['link_path']}</span></p>
    </a>
</div>

DELIMETER;

echo $s;
}

}

// mostra gli studi nel footer
function contact_study() {

$studi = get_studi();

for($i = 0; $i < count($studi); $i++) {
$s = <<<DELIMETER

<div class="pb-3">
    <i class="fas fa-map-marker-alt mr-4"></i>
    <p class="font-weight-bold mb-1 d-inline-block">{$studi[$i]['studio_name']}</p>
    <div class="pl-5">
        <p class="mb-0">{$studi[$i]['studio_adress']}</p>
        <p class="mb-0">Tel: {$studi[$i]['studio_phone']}</p>
    </div>
</div>

DELIMETER;

echo $s;
}

}

// ritorna la slide (foto) corrente
function get_page_quote($page) {

$query = query("SELECT * FROM quotes WHERE quote_page = $page LIMIT 1");
confirm($query);

$row = fetch_array($query);

$img = display_image($row['quote_img']);

$quote = <<<DELIMETER

<div class="position-relative">
    <div class="position-relative w-100 overflow-hidden">
        <div class="position-relative float-left w-100">
        <div class='row bg-color align-items-center'>
            <div class='col-lg-6 blockquote mb-0'>
                    <p class="quote">{$row['quote_text']}</p>
                    <p class="blockquote-footer">{$row['quote_author']}</p>
                </div>
                <div class='col-lg-6 quote-image'>
                    <img src="../resources/{$img}" alt="{$row['quote_img']}" class="float-right">
                </div>
            </div>
        </div>
    </div>
</div>


DELIMETER;

echo $quote;


}

// ritorna lista di disturbi
function get_disturbi() {

$query = query("SELECT * FROM disturbi");
confirm($query);

while($row = fetch_array($query)) {

$disturbi = <<<DELIMETER

<div class="py-3">
    <i class="fas fa-check-circle profile-icon"></i><p class="d-inline-block pl-4 mb-0 profile-list">{$row['disturbo_name']}</p>
</div>

DELIMETER;

echo $disturbi;
    
}

}

// ritorna lista di disturbi
function get_servizi() {

$query = query("SELECT * FROM servizi");
confirm($query);

while($row = fetch_array($query)) {

$servizi = <<<DELIMETER

<div class="col-lg-4 pr-3 pl-0 pt-0 pb-3">
    <div class="card service-card shadow-sm">
        <div class="row align-items-center card-body">
            <div class="col-lg-1 px-0">
                <i class="fas fa-check profile-icon"></i>
            </div>
            <div class="col-lg-11 px-0">
                <p class="d-inline-block pl-4 mb-0 profile-list">{$row['servizio_name']}</p>
            </div>
        </div>
    </div>
</div>


DELIMETER;

echo $servizi;
    
}

}

// ritorna lista di affiliazioni
function get_aff() {

$query = query("SELECT * FROM affiliazioni");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['aff_image']);

$aff = <<<DELIMETER

<div class="col-lg-3 text-center">
    <a href="{$row['aff_link']}" target="_blank">
        <img src="../resources/{$img}" alt="{$row['aff_name']}">
    </a>
</div>


DELIMETER;

echo $aff;
    
}

}


// ritorna galery foto
function get_foto($cat) {

$query = query("SELECT * FROM foto WHERE foto_cat = '{$cat}'");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['foto_image']);

$foto = <<<DELIMETER

<li class="glide__slide">
    <a href="../resources/{$img}" target="_blank"><img src="../resources/{$img}" alt="" class="img-fluid shadow"></a>
</li>

DELIMETER;

echo $foto;

}

}
 
// ritorna id video Youtube
function extractVideoID($url){
    $regExp = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/";
    preg_match($regExp, $url, $video);
    return $video[7];
}

// ritorna gallery video
function get_video() {

$query = query("SELECT * FROM video ORDER BY video_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$id = extractVideoID($row['video_link']);

$video = <<<DELIMETER

<li class="glide__slide">
    <iframe class="embed-responsive-item" width="420" height="250" src="https://www.youtube.com/embed/{$id}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p class="mb-0 pt-3 text-uppercase font-weight-bold foto-text">{$row['video_name']}</p>
</li>

DELIMETER;

echo $video;

}
    
}

// mostra articoli e tag
function show_articles() {

$container = "";

// il tag è tutti, quindi mostro ultimo atricolo più lista articoli
if(isset($_GET['tag'])) {

if($_GET['tag'] == '0') {

$last = query("SELECT * FROM articoli ORDER BY art_id DESC LIMIT 1");
confirm($last);

$row1 = fetch_array($last);

$img1 = display_image($row1['art_image']);
$data1 = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row1['art_data']);
if($row1['art_tag'] == '1') {
    $tag1 = "News";
}
elseif($row1['art_tag'] == '2') {
    $tag1 = "Evento";
}
else {
    $tag1 = "Libro";
}

$last_art = <<<DELIMETER

<div class="card art-card mb-4 shadow {$row1['art_tag']}">
    <div class="row no-gutters align-items-center">
        <div class="col-lg-7">
            <img src="../resources/{$img1}" class="card-img card-art-image" alt="{$row1['art_image']}">
        </div>
        <div class="col-md-5">
            <div class="card-art align-items-end flex-column">
                <div class="px-3 pb-1">
                    <p class="art-data">Pubblicato il {$data1}</p>
                </div>
                <div class="px-3 pb-1">
                    <h4 class="art-title pb-2">{$row1['art_title']}</h4>
                </div>
                <div class="px-3 pb-1">
                    <p class="art-note text-justify pb-4">di {$row1['art_note']}</p>
                </div>
                <div class="mt-auto px-3 d-flex align-items-center justify-content-between">
                    <a role="button" href="{$row1['art_link']}" class="btn dark-btn btn-lg" target="_blank">Approfondisci</a>
                    <button class="btn rounded-pill art-tag">{$tag1}</button>
                </div>
            </div>
        </div>
    </div>
</div>

DELIMETER;

$container .= $last_art;

$container .= get_articles_list('0');

echo $container;
}
else {

$container .= get_articles_list($_GET['tag']);

echo $container;

}
}
else {

echo "No items found";

}

}

// mostra gli articoli in lista
function get_articles_list($filter) {

$arts = "<div class='row mt-4'>";

if($filter == '0') {

$query0 = query("SELECT * FROM articoli WHERE art_id NOT IN (SELECT MAX(art_id) FROM articoli ORDER BY art_id DESC) ORDER BY art_id DESC");
confirm($query0);

while($row = fetch_array($query0)) {

$img = display_image($row['art_image']);
$data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row['art_data']);
if($row['art_tag'] == '1') {
    $tag = "News";
}
elseif($row['art_tag'] == '2') {
    $tag = "Evento";
}
else {
    $tag = "Libro";
}
    
$art0 = <<<DELIMETER

<div class="col-lg-3 px-2">
    <div class="card art-card fixed-card mb-4 shadow {$row['art_tag']}">
        <img src="../resources/{$img}" class="card-img-top card-art-image" alt="{$row['art_image']}">
        <div class="card-body px-4 py-4">
            <p class="art-data">Pubblicato il {$data}</p>
            <h4 class="art-title pb-2">{$row['art_title']}</h4>
            <p class="art-note text-justify pb-4">di {$row['art_note']}</p>
            <div class="art-footer d-flex align-items-center justify-content-between">
                <a role="button" href="{$row['art_link']}" class="btn dark-btn" target="_blank">Approfondisci</a>
                <button class="btn rounded-pill art-tag">{$tag}</button>
            </div>
        </div>
    </div>
</div>

DELIMETER;

$arts .= $art0;
}
$arts .= "</div>";
}
else {

$query = query("SELECT * FROM articoli WHERE art_tag = $filter ORDER BY art_data DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['art_image']);
$data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row['art_data']);
if($row['art_tag'] == '1') {
    $tag = "News";
}
elseif($row['art_tag'] == '2') {
    $tag = "Evento";
}
else {
    $tag = "Libro";
}
    
$art0 = <<<DELIMETER

<div class="col-lg-3 px-2">
    <div class="card art-card fixed-card mb-4 shadow {$row['art_tag']}">
        <img src="../resources/{$img}" class="card-img-top card-art-image" alt="{$row['art_image']}">
        <div class="card-body">
            <p class="art-data">Pubblicato il {$data}</p>
            <h4 class="art-title pb-2">{$row['art_title']}</h4>
            <p class="art-note text-justify pb-4">di {$row['art_note']}</p>
            <div class="art-footer d-flex align-items-center justify-content-between">
                <a role="button" href="{$row['art_link']}" class="btn dark-btn" target="_blank">Approfondisci</a>
                <button class="btn rounded-pill art-tag">{$tag}</button>
            </div>
        </div>
    </div>
</div>

DELIMETER;

$arts .= $art0;

}
$arts .= "</div>";
}

return $arts;
    
}


//*************************** BACK FUNCTIONS ****************************

// mostra il contenuto del body della pagina dinamicamente
function show_admin_content() {

    if($_SERVER['REQUEST_URI'] == "/costacurta/public/admin/" || $_SERVER['REQUEST_URI'] == "/costacurta/public/admin/index.php" ) {
        include(TEMPLATE_BACK . "/dashboard.php");
    }

    if(isset($_GET['account'])) {
        include(TEMPLATE_BACK . "/account.php");
    }

    if(isset($_GET['profile'])) {
        include(TEMPLATE_BACK . "/profile.php");
    }

    if(isset($_GET['quotes'])) {
        include(TEMPLATE_BACK . "/quotes.php");
    }

    if(isset($_GET['pubs'])) {
        include(TEMPLATE_BACK . "/pubs.php");
    }

    if(isset($_GET['gallery'])) {
        include(TEMPLATE_BACK . "/gallery.php");
    }

    if(isset($_GET['video'])) {
        include(TEMPLATE_BACK . "/video.php");
    }

    if(isset($_GET['articles'])) {
        include(TEMPLATE_BACK . "/articles.php");
    }

    if(isset($_GET['aff'])) {
        include(TEMPLATE_BACK . "/aff.php");
    }

    if(isset($_GET['contatti'])) {
        include(TEMPLATE_BACK . "/contatti.php");
    }

    if(isset($_GET['edit-quote'])) {
        include(TEMPLATE_BACK . "/edit-quote.php");
    }

    if(isset($_GET['edit_profile'])) {
        include(TEMPLATE_BACK . "/edit_profile.php");
    }

    if(isset($_GET['edit_pub'])) {
        include(TEMPLATE_BACK . "/edit_pub.php");
    }

    if(isset($_GET['edit_art'])) {
        include(TEMPLATE_BACK . "/edit_art.php");
    }

    if(isset($_GET['delete_dist'])) {
        include(TEMPLATE_BACK . "/delete_dist.php");
    }

    if(isset($_GET['delete_serv'])) {
        include(TEMPLATE_BACK . "/delete_serv.php");
    }

    if(isset($_GET['delete_pub'])) {
        include(TEMPLATE_BACK . "/delete_pub.php");
    }

    if(isset($_GET['delete_foto'])) {
        include(TEMPLATE_BACK . "/delete_foto.php");
    }

    if(isset($_GET['delete_video'])) {
        include(TEMPLATE_BACK . "/delete_video.php");
    }

    if(isset($_GET['delete_art'])) {
        include(TEMPLATE_BACK . "/delete_art.php");
    }

    if(isset($_GET['logout'])) {
        include(TEMPLATE_BACK . "/logout.php");
    }

}

// mostra il contenuto del body della pagina dinamicamente
function get_admin_h1() {

    $title = "";

    if($_SERVER['REQUEST_URI'] == "/costacurta/public/admin/" || $_SERVER['REQUEST_URI'] == "/costacurta/public/admin/index.php" ) {
        $title = "Dashboard";
    }

    if(isset($_GET['account'])) {
        $title = "Impostazioni account";
    }

    if(isset($_GET['quotes'])) {
        $title = "Citazioni";
    }

    if(isset($_GET['profile'])) {
        $title = "Profilo";
    }

    if(isset($_GET['pubs'])) {
        $title = "Pubblicazioni";
    }

    if(isset($_GET['gallery'])) {
        $title = "Gallery foto";
    }

    if(isset($_GET['video'])) {
        $title = "Video e multimedia";
    }

    if(isset($_GET['articles'])) {
        $title = "News, eventi e libri";
    }

    if(isset($_GET['edit-quote'])) {
        $title = "Modifica citazione";
    }

    if(isset($_GET['edit_profile'])) {
        $title = "Modifica profilo";
    }

    if(isset($_GET['edit_pub'])) {
        $title = "Modifica pubblicazione";
    }

    if(isset($_GET['edit_art'])) {
        $title = "Modifica news";
    }

    echo $title;

}

// modifica account admin
function update_account() {

    if(isset($_POST['updateAccount'])) {

        $username = escape_string($_POST['username']);
        $email = escape_string($_POST['email']);

        $query = query("UPDATE users SET username = '{$username}', email = '{$email}' WHERE user_id = '{$_SESSION['user']}' ");
        confirm($query);

        set_message("Account modificato con successo", "alert-success");
        redirect("../../public/admin/index.php?account");

    }

}

// modifica password admin
function update_password($psw) {

    if(isset($_POST['updatePsw'])) {

        $current_psw = escape_string($_POST['current_psw']);
        $new_psw = password_hash(escape_string($_POST['new_psw']), PASSWORD_DEFAULT);

        if(password_verify($current_psw, $psw) === true) {

            $query = query("UPDATE users SET password = '{$new_psw}' WHERE user_id = '{$_SESSION['user']}' ");
            confirm($query);

            set_message("Password modificata con successo", "alert-success");

        }
        else {
        
            set_message("Password attuale non corretta", "alert-danger");

        }
        redirect("../../public/admin/index.php?account");

    }

}

// aggiunge una citazione
function add_quote() {

    if(isset($_POST['addQuote'])) {

        $cit = escape_string($_POST['cit']);
        $img = escape_string($_FILES['quoteFoto']['name']);
        $img_loc = escape_string($_FILES['quoteFoto']['tmp_name']);
        $autore = escape_string($_POST['autore']);

        move_uploaded_file($img_loc, UPLOADS . DS . $img);

        $query = query("INSERT INTO quotes(quote_text, quote_img, quote_author) VALUES ('{$cit}', '{$img}', '{$autore}')");
        confirm($query);

        set_message("{$img_loc}", "alert-success");
        redirect("../../public/admin/index.php?quotes");

    }

}

// modifica una citazione
function edit_quote($id) {

    if(isset($_POST['editQuote'])) {

        $cit = escape_string($_POST['cit']);
        $autore = escape_string($_POST['autore']);
        $foto = escape_string($_FILES['quoteFoto']['name']);
        $foto_loc = escape_string($_FILES['quoteFoto']['tmp_name']);

        if(empty($foto)) {

            $get_foto = query("SELECT quote_img FROM quotes WHERE quote_id = $id");
            confirm($get_foto);

            $result = fetch_array($get_foto);
            $foto = $result['quote_img'];

        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("UPDATE quotes SET quote_text = '{$cit}', quote_img = '{$foto}', quote_author = '{$autore}' WHERE quote_id = $id");
        confirm($query);

        redirect("../../public/admin/index.php?quotes");

    }

}

// mostra i thumbnails delle citazioni
function get_quote_thumbnails($page) {

$query = query("SELECT * FROM quotes WHERE quote_page = $page ORDER BY quote_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['quote_img']);

if($page == '0') {

$thumb = <<<DELIMETER

<div class="col-lg-2 mb-3">
    <div class="card">
        <img src="../../resources/{$img}" alt="" class="img-fluid quote-thumb">
        <div class="card-body">
            <p>{$row['quote_text']}</p>
            <p class="font-weight-bold">{$row['quote_author']}</p>
            <a href="../../public/admin/index.php?edit-quote&id={$row['quote_id']}" role="button" class="btn btn-primary">Modifica</a>
        </div>
    </div>
</div>

DELIMETER;

}
else {

if($page == '1') {
$text = "Qualcosa su di me";
}
elseif($page == '2') {
$text = "Aree di intervento";
}
elseif($page == '3') {
$text = "Gallery";
}
elseif($page == '4') {
$text = "News";
}
elseif($page == '5') {
$text = "Contatti";
}

$thumb = <<<DELIMETER

<div class="col-lg-2 mb-3">
    <p class="text-uppercase font-weight-bold mb-3">{$text}</p>
    <div class="card">
        <img src="../../resources/{$img}" alt="" class="img-fluid quote-thumb">
        <div class="card-body">
            <p>{$row['quote_text']}</p>
            <p class="font-weight-bold">{$row['quote_author']}</p>
            <a href="../../public/admin/index.php?edit-quote&id={$row['quote_id']}" role="button" class="btn btn-primary">Modifica</a>
        </div>
    </div>
</div>

DELIMETER;

}

echo $thumb;
    
}

}

// modifica il profilo
function update_profile() {

    if(isset($_POST['editProfile'])) {

        $desc = escape_string($_POST['desc']);
        $foto = escape_string($_FILES['foto']['name']);
        $foto_loc = escape_string($_FILES['foto']['tmp_name']);
        $cv = escape_string($_FILES['cv']['name']);
        $cv_loc = escape_string($_FILES['cv']['tmp_name']);

        if(empty($foto)) {

            $get_foto = query("SELECT pro_foto FROM profilo ORDER BY pro_id DESC LIMIT 1");
            confirm($get_foto);

            $result = fetch_array($get_foto);
            $foto = $result['pro_foto'];

        }

        if(empty($cv)) {

            $get_cv = query("SELECT pro_cv FROM profilo ORDER BY pro_id DESC LIMIT 1");
            confirm($get_cv);

            $result = fetch_array($get_cv);
            $cv = $result['pro_cv'];

        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);
        move_uploaded_file($cv_loc, UPLOADS . DS . $cv);

        $query = query("UPDATE profilo SET pro_desc = '{$desc}', pro_foto = '{$foto}', pro_cv = '{$cv}' ORDER BY pro_id DESC LIMIT 1");
        confirm($query);

        redirect("../../public/admin/index.php?profile");

    }

}

// aggiunge un disturbo
function add_disturbo() {

    if(isset($_POST['addDisturbo'])) {

        $name = escape_string($_POST['nome']);

        $query = query("INSERT INTO disturbi(disturbo_name) VALUES ('{$name}') ");
        confirm($query);

        set_message("Disturbo aggiunto correttamente", "alert-success");
        redirect("../../public/admin/index.php?profile");

    }

}

// aggiunge un servizio
function add_servizio() {

    if(isset($_POST['addServizio'])) {

        $name = escape_string($_POST['nome']);

        $query = query("INSERT INTO servizi(servizio_name) VALUES ('{$name}') ");
        confirm($query);

        set_message("Servizio aggiunto correttamente", "alert-success");
        redirect("../../public/admin/index.php?profile");

    }

}

// aggiunge una pubblicazione
function add_pub() {

    if(isset($_POST['addPub'])) {

        $title = escape_string($_POST['title']);
        $pub = escape_string($_FILES['pubLink']['name']);
        $pub_loc = escape_string($_FILES['pubLink']['tmp_name']);
        $autore = escape_string($_POST['autore']);
        $sub = escape_string($_POST['sub']);

        if(empty($pub)) {
            $query = query("INSERT INTO pubblicazioni(pub_title, pub_subtitle, pub_autor, pub_link) VALUES ('{$title}', '{$sub}', '{$autore}', NULL) ");
            confirm($query);
        }
        else {
            move_uploaded_file($pub_loc, UPLOADS . DS . $pub);
            $query = query("INSERT INTO pubblicazioni(pub_title, pub_subtitle, pub_autor, pub_link) VALUES ('{$title}', '{$sub}', '{$autore}', '{$pub}') ");
            confirm($query);
        }


        set_message("Pubblicazione aggiunta correttamente", "alert-success");
        redirect("../../public/admin/index.php?pubs");

    }

}

// modifica una pubblicazione
function edit_pub($id) {

    if(isset($_POST['editPub'])) {

        $title = escape_string($_POST['title']);
        $pub = escape_string($_FILES['pubLink']['name']);
        $pub_loc = escape_string($_FILES['pubLink']['tmp_name']);
        $autore = escape_string($_POST['autore']);
        $sub = escape_string($_POST['sub']);

        if(empty($pub)) {

            $get_pub = query("SELECT pub_link FROM pubblicazioni WHERE pub_id = $id");
            confirm($get_pub);

            $result = fetch_array($get_pub);
            $pub = $result['pub_link'];

        }

        move_uploaded_file($pub_loc, UPLOADS . DS . $pub);

        $query = query("UPDATE pubblicazioni SET pub_title = '{$title}', pub_subtitle = '{$sub}', pub_autor = '{$autore}', pub_link = '{$pub}' WHERE pub_id = $id");
        confirm($query);

        redirect("../../public/admin/index.php?pubs");

    }

}

// aggiunge una foto
function add_foto() {

    if(isset($_POST['addFoto'])) {

        $nome = escape_string($_POST['name']);
        $foto = escape_string($_FILES['foto']['name']);
        $foto_loc = escape_string($_FILES['foto']['tmp_name']);
        $cat = escape_string($_POST['cat']);

        if(empty($nome)) {
            $nome = NULL;
        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("INSERT INTO foto(foto_image, foto_name, foto_cat) VALUES ('{$foto}', '{$nome}', '{$cat}') ");
        confirm($query);

        set_message("Foto aggiunta correttamente", "alert-success");
        redirect("../../public/admin/index.php?gallery");

    }

}

// ritorna la lista delle foto
function get_foto_thumb($cat) {

$query = query("SELECT * FROM foto WHERE foto_cat = '{$cat}' ORDER BY foto_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['foto_image']);

$foto = <<<DELIMETER

<div class="col-lg-2 mb-5">
    <img src="../../resources/{$img}" alt="" class="img-thumbnail img-fluid">
    <button type="button" class="btn btn-danger close-modal" data-toggle="modal" data-target="#deleteModal{$row['foto_id']}">X</button>

    <div class="modal fade" role="dialog" id="deleteModal{$row['foto_id']}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Elimina foto dalla gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler eliminare questa foto?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                    <a href="../../public/admin/index.php?delete_foto&id={$row['foto_id']}&img={$row['foto_image']}" role="button" class="btn btn-danger">Conferma eliminazione</a>
                </div>
            </div>
        </div>
    </div>
</div>

DELIMETER;

echo $foto;
    
}

}

// aggiunge un video
function add_video() {

    if(isset($_POST['addVideo'])) {

        $title = escape_string($_POST['title']);
        $link = escape_string($_POST['link']);

        $query = query("INSERT INTO video(video_name, video_link) VALUES ('{$title}', '{$link}') ");
        confirm($query);

        set_message("Video aggiunto correttamente", "alert-success");
        redirect("../../public/admin/index.php?video");

    }

}

// ritorna gallery video
function get_video_thumb() {

$query = query("SELECT * FROM video ORDER BY video_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$id = extractVideoID($row['video_link']);

$video = <<<DELIMETER

<div class="col-lg-3 mb-4">
    <iframe class="embed-responsive-item" width="100%" height="auto" src="https://www.youtube.com/embed/{$id}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p class="pt-1 text-uppercase foto-text">{$row['video_name']}</p>
    <button type="button" class="btn btn-danger close-modal" data-toggle="modal" data-target="#deletevideoModal{$row['video_id']}">X</button>

    <div class="modal fade" role="dialog" id="deletevideoModal{$row['video_id']}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Elimina video dalla gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler eliminare questo video?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                    <a href="../../public/admin/index.php?delete_video&id={$row['video_id']}" role="button" class="btn btn-danger">Conferma eliminazione</a>
                </div>
            </div>
        </div>
    </div>
</div>

DELIMETER;

echo $video;

}
    
}

// aggiunge un articolo
function add_art() {

    if(isset($_POST['addArt'])) {

        $titolo = escape_string($_POST['title']);
        $sub = escape_string($_POST['sub']);
        $link = escape_string($_POST['link']);
        $tag = escape_string($_POST['tag']);
        $foto = escape_string($_FILES['artFoto']['name']);
        $foto_loc = escape_string($_FILES['artFoto']['tmp_name']);

        if(empty($foto)) {
            $foto = 'empty-event.png';
        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("INSERT INTO articoli(art_data, art_image, art_title, art_tag, art_link, art_note) VALUES (now(), '{$foto}', '{$titolo}', '{$tag}', '{$link}', '{$sub}') ");
        confirm($query);

        set_message("News pubblicata correttamente", "alert-success");
        redirect("../../public/admin/index.php?articles");

    }
    
}

// ritorna lista di articoli
function get_art_thumb() {

$query = query("SELECT * FROM articoli ORDER BY art_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['art_image']);
$data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row['art_data']);

$art_thumb = <<<DELIMETER

<div class="col-lg-3 mb-3">
    <div class="card">
        <img src="../../resources/{$img}" class="quote-thumb" alt="">
        <div class="card-body">
            <h5 class="card-title">{$row['art_title']}</h5>
            <p class="card-text">{$row['art_note']}</p>
            <p class="card-text"><small class="text-muted">{$data}</small></p>
            <a href="../../public/admin/index.php?edit_art&id={$row['art_id']}" role="button" class="btn btn-primary">Modifica</a>
            <a href="../../public/admin/index.php?delete_art&id={$row['art_id']}&img={$row['art_image']}" role="button" class="btn btn-danger">Elimina</a>
        </div>
    </div>
</div>

DELIMETER;

echo $art_thumb;
    
}    

}

// modifica l'articolo
function edit_art($id) {

    if(isset($_POST['editArt'])) {

        $titolo = escape_string($_POST['title']);
        $sub = escape_string($_POST['sub']);
        $link = escape_string($_POST['link']);
        $tag = escape_string($_POST['tag']);
        $foto = escape_string($_FILES['artFoto']['name']);
        $foto_loc = escape_string($_FILES['artFoto']['tmp_name']);

        if(empty($foto)) {

            $get_foto = query("SELECT art_image FROM articoli WHERE art_id = $id");
            confirm($get_foto);

            $result = fetch_array($get_foto);
            $foto = $result['art_image'];

        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("UPDATE articoli SET art_image = '{$foto}', art_title = '{$titolo}', art_tag = '{$tag}', art_link = '{$link}', art_note = '{$sub}' WHERE art_id = $id");
        confirm($query);

        redirect("../../public/admin/index.php?articles");

    }

}


?>