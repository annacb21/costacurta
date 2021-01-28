<?php

use PHPMailer\PHPMailer\PHPMailer;
//require '../vendor/autoload.php';


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

<div class="alert {$_SESSION['alert']} w-50 text-center" role="alert">
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

// getter articolo
function get_article($id) {

    $query = query("SELECT * FROM articoli WHERE art_id = $id");
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

    if(isset($_GET['art_detail'])) {
        include(TEMPLATE_FRONT . "/art_detail.php");
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
            set_message("La tua email è stata inviata con successo", "alert-success");
        } 
        else {
            set_message("Oops, qualcosa è andato storto: " . $mail->ErrorInfo, "alert-danger");  
        }
        redirect("../public/index.php?contatti");

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
    <div class="card service-card">
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

$query = query("SELECT * FROM foto WHERE foto_cat = '$cat' ORDER BY foto_id DESC");
confirm($query);

$row = fetch_array($query);

while($row = fetch_array($query)) {

$img = display_image($row['foto_image']);

$foto = <<<DELIMETER

<li class="glide__slide">
    <a href="../resources/{$img}" target="_blank"><img src="../resources/{$img}" alt="{$row['foto_name']}" class="img-fluid"></a>
    <p class="mb-0 pt-3 text-uppercase font-weight-bold foto-text">{$row['foto_name']}</p>
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

$row = fetch_array($query);

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

// mostra gli articoli in lista
function get_articles_list() {

$rows = get_tot_art();

if(isset($_GET['page'])) {
    $page = preg_replace('#[^0-9]#', '', $_GET['page']);
}
else {
    $page = 1;
}

$art_per_page = 4;
$last_page = ceil($rows / $art_per_page);

if($page < 1) {
    $page = 1;
}
elseif($page > $last_page) {
    $page = $last_page;
}

$middle_nums = '';
$sub = $page - 1;
$sub2 = $page - 2;
$add = $page + 1;
$add2 = $page + 2;

if($page == 1) {
    $middle_nums .= '<li class="page-item active" aria-current="page"><a class="page-link">'.$page.'</a></li>';
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$add.'">'.$add.'</a></li>';
}
elseif($page == $last_page) {
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$sub.'">'.$sub.'</a></li>';
    $middle_nums .= '<li class="page-item active" aria-current="page"><a class="page-link">'.$page.'</a></li>';
}
elseif($page > 2 && $page < ($last_page - 1)) {
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$sub2.'">'.$sub2.'</a></li>';
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$sub.'">'.$sub.'</a></li>';
    $middle_nums .= '<li class="page-item active" aria-current="page"><a class="page-link">'.$page.'</a></li>';
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$add.'">'.$add.'</a></li>';
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$add2.'">'.$add2.'</a></li>';
}
elseif($page > 1 && $page < $last_page) {
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$sub.'">'.$sub.'</a></li>';
    $middle_nums .= '<li class="page-item active" aria-current="page"><a class="page-link">'.$page.'</a></li>';
    $middle_nums .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$add.'">'.$add.'</a></li>';
}

$limit = 'LIMIT ' . ($page-1) * $art_per_page . ',' . $art_per_page;

$query = query("SELECT * FROM articoli ORDER BY art_data DESC $limit");
confirm($query);

$pagination = '';

if($page != 1) {
    $prev = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$prev.'">Indietro</a></li>';
}

$pagination .= $middle_nums;

if($page != $last_page) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?articoli&page='.$next.'">Avanti</a></li>';
}

while($row = fetch_array($query)) {

$img = display_image($row['art_image']);
$data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row['art_data']);
$ant = anteprima($row['art_text'], 50);
    
$arts = <<<DELIMETER

<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <a href="../public/index.php?art_detail&id={$row['art_id']}"><img src="../resources/{$img}" class="card-img img-fluid" alt=""></a>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{$row['art_title']}</h5>
                <p class="card-text text-justify pr-3">{$ant}</p>
                <p class="card-text"><small class="text-muted">{$data}</small></p>
            </div>
        </div>
    </div>
</div>

DELIMETER;

echo $arts;
    
}

echo "<nav aria-label='Page navigation example'><ul class='pagination'>{$pagination}</ul></nav>";
    
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

    if(isset($_GET['areas'])) {
        include(TEMPLATE_BACK . "/areas.php");
    }

    if(isset($_GET['gallery'])) {
        include(TEMPLATE_BACK . "/gallery.php");
    }

    if(isset($_GET['articles'])) {
        include(TEMPLATE_BACK . "/articles.php");
    }

    if(isset($_GET['edit_account'])) {
        include(TEMPLATE_BACK . "/edit_account.php");
    }

    if(isset($_GET['delete_slide'])) {
        include(TEMPLATE_BACK . "/delete_slide.php");
    }

    if(isset($_GET['delete_area'])) {
        include(TEMPLATE_BACK . "/delete_area.php");
    }

    if(isset($_GET['edit_area'])) {
        include(TEMPLATE_BACK . "/edit_area.php");
    }

    if(isset($_GET['edit_art'])) {
        include(TEMPLATE_BACK . "/edit_art.php");
    }

    if(isset($_GET['delete_art'])) {
        include(TEMPLATE_BACK . "/delete_art.php");
    }

    if(isset($_GET['edit_profile'])) {
        include(TEMPLATE_BACK . "/edit_profile.php");
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
        $title = "Account";
    }

    if(isset($_GET['profile'])) {
        $title = "Profilo";
    }

    if(isset($_GET['areas'])) {
        $title = "Aree di intervento";
    }

    if(isset($_GET['gallery'])) {
        $title = "Gallery foto";
    }

    if(isset($_GET['articles'])) {
        $title = "Articoli";
    }

    if(isset($_GET['edit_account'])) {
        $title = "Modifica dati account";
    }

    if(isset($_GET['edit_area'])) {
        $title = "Modifica area di intervento";
    }

    if(isset($_GET['edit_art'])) {
        $title = "Modifica articolo";
    }

    if(isset($_GET['edit_profile'])) {
        $title = "Modifica profilo";
    }

    echo $title;

}

// modifica account admin
function update_account() {

    if(isset($_POST['update'])) {

        $username = escape_string($_POST['username']);
        $email = escape_string($_POST['email']);

        $query = query("UPDATE users SET username = '{$username}', email = '{$email}' WHERE user_id = '{$_SESSION['user']}' ");
        confirm($query);

        redirect("../../public/admin/index.php?account");

    }

}

// modifica password admin
function update_password($psw) {

    if(isset($_POST['updatePsw'])) {

        $current_psw = escape_string($_POST['current_psw']);
        $new_psw = escape_string($_POST['new_psw']);

        if($current_psw == $psw) {

            $query = query("UPDATE users SET password = '{$new_psw}' WHERE user_id = '{$_SESSION['user']}' ");
            confirm($query);

            redirect("../../public/admin/index.php?account");

        }
        else {
            
            set_message("Password attuale non corretta", "alert-danger");
            redirect("../../public/admin/index.php?edit_account");

        }

    }

}

// aggiunge una slide (foto)
function add_slide() {

    if(isset($_POST['upload'])) {

        $title = escape_string($_POST['title']);
        $img = escape_string($_FILES['file']['name']);
        $img_loc = escape_string($_FILES['file']['tmp_name']);
        $studio = escape_string($_POST['study']);

        move_uploaded_file($img_loc, UPLOADS . DS . $img);

        $query = query("INSERT INTO slides(slide_title, slide_image, studio_id) VALUES ('{$title}', '{$img}', '{$studio}') ");
        confirm($query);

        set_message("Foto aggiunta correttamente", "alert-success");
        redirect("../../public/admin/index.php?gallery");

    }

}

// mostra i thumbnails delle slide
function get_slides_thumbnails() {

$query = query("SELECT * FROM slides ORDER BY slide_id DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['slide_image']);

$slides_thumb = <<<DELIMETER

<div class="col-sm-12 col-md-4 col-lg-2 col-xl-2 mb-3">
    <img src="../../resources/{$img}" alt="{$row['slide_title']}" class="img-thumbnail img-fluid">

    <button type="button" class="btn btn-danger close-modal" data-toggle="modal" data-target="#deleteModal">X</button>

    <div class="modal fade" role="dialog" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Elimina foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Sei sicuro di voler eliminare questa foto?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                <a href="../../public/admin/index.php?delete_slide&id={$row['slide_id']}&img={$row['slide_image']}" role="button" class="btn btn-danger">Conferma eliminazione</a>
            </div>
            </div>
        </div>
    </div>
</div>

DELIMETER;

echo $slides_thumb;
    
}

}

// aggiunge un'area di intervento
function add_area() {

    if(isset($_POST['add'])) {

        $name = escape_string($_POST['name_area']);
        $desc = escape_string($_POST['desc']);

        $query = query("INSERT INTO aree(area_name, area_desc) VALUES ('{$name}', '{$desc}') ");
        confirm($query);

        set_message("Area aggiunta correttamente", "alert-success");
        redirect("../../public/admin/index.php?areas");

    }

}

// ritorna la lista delle aree di intervento
function get_areas() {

$query = query("SELECT * FROM aree");
confirm($query);

while($row = fetch_array($query)) {

$aree = <<<DELIMETER

<li class="list-group-item d-flex justify-content-between align-items-center">
    <p class="pr-5">{$row['area_name']}</p>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <a href="../../public/admin/index.php?edit_area&id={$row['area_id']}" role="button" class="btn btn-warning">Modifica</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAreaModal">Elimina</button>
    </div>
</li>
<div class="modal fade" role="dialog" id="deleteAreaModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Elimina area di intervento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <p>Sei sicuro di voler eliminare l'area di intervento?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
            <a href="../../public/admin/index.php?delete_area&id={$row['area_id']}" role="button" class="btn btn-danger">Conferma eliminazione</a>
        </div>
        </div>
    </div>
</div>

DELIMETER;

echo $aree;
    
}

}

// modifica area di intervento
function update_area() {

    if(isset($_POST['update'])) {

        $name = escape_string($_POST['name_area']);
        $desc = escape_string($_POST['desc']);

        $query = query("UPDATE aree SET area_name = '{$name}', area_desc = '{$desc}' WHERE area_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        redirect("../../public/admin/index.php?areas");

    }

}

// aggiunge un articolo
function add_article() {

    if(isset($_POST['publish'])) {

        $autore = escape_string($_POST['autore']);
        $titolo = escape_string($_POST['titolo']);
        $articolo = escape_string($_POST['articolo']);
        $foto = escape_string($_FILES['foto']['name']);
        $foto_loc = escape_string($_FILES['foto']['tmp_name']);

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("INSERT INTO articoli(autore, titolo, corpo, art_data, foto) VALUES ('{$autore}', '{$titolo}', '{$articolo}', now(), '{$foto}') ");
        confirm($query);

        set_message("Articolo pubblicato correttamente", "alert-success");
        redirect("../../public/admin/index.php?articles");

    }
    
}

// ritorna lista di articoli
function get_articles() {

$query = query("SELECT * FROM articoli ORDER BY art_data DESC");
confirm($query);

while($row = fetch_array($query)) {

$img = display_image($row['foto']);
$data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $row['art_data']);
$ant = anteprima($row['corpo'], 20);

$art_thumb = <<<DELIMETER

<div class="col-xs-6 col-md-12 col-lg-3 col-xl-3 mb-3">
    <div class="card" style="width: 18rem;">
        <a href="../../public/admin/index.php?edit_art&id={$row['art_id']}"><img src="../../resources/{$img}" class="card-img-top" alt=""></a>
        <div class="card-body">
            <h5 class="card-title">{$row['titolo']}</h5>
            <p class="card-text">{$ant}</p>
            <p class="card-text"><small class="text-muted">{$data}</small></p>
        </div>
    </div>
</div>

DELIMETER;

echo $art_thumb;
    
}    

}

// modifica l'articolo
function update_art() {

    if(isset($_POST['update'])) {

        $autore = escape_string($_POST['autore']);
        $titolo = escape_string($_POST['titolo']);
        $articolo = escape_string($_POST['articolo']);
        $foto = escape_string($_FILES['foto']['name']);
        $foto_loc = escape_string($_FILES['foto']['tmp_name']);

        if(empty($foto)) {

            $get_foto = query("SELECT foto FROM articoli WHERE art_id = " . escape_string($_GET['id']) . " ");
            confirm($get_foto);

            $result = fetch_array($get_foto);
            $foto = $result['foto'];

        }

        move_uploaded_file($foto_loc, UPLOADS . DS . $foto);

        $query = query("UPDATE articoli SET autore = '{$autore}', titolo = '{$titolo}', corpo = '{$articolo}', foto = '{$foto}' WHERE art_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        redirect("../../public/admin/index.php?articles");

    }

}

// modifica il profilo
function update_profile() {

    if(isset($_POST['update'])) {

        $desc = escape_string($_POST['desc']);
        $email = escape_string($_POST['email']);
        $tel = escape_string($_POST['tel']);
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

        $query = query("UPDATE profilo SET pro_desc = '{$desc}', pro_foto = '{$foto}', pro_cv = '{$cv}', pro_email = '{$email}', pro_tel = '{$tel}' ORDER BY pro_id DESC LIMIT 1");
        confirm($query);

        redirect("../../public/admin/index.php?profile");

    }

}


?>