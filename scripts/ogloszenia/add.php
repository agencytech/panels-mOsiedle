<?php
session_start();
$title = $_POST['title'];
$text = $_POST['text'];
$expire_at = $_POST['expire_at'];
if ($expire_at == '') {
    $expire_at = NULL;
}
$importance = $_POST['importance'];
$created_at = date("Y-m-d H:i:s");
$edited_at = date("Y-m-d H:i:s");
$wspolnota_id = $_SESSION['wspolnota_id'];
$icon = NULL;
$author_id = $_SESSION['user_id'];

if ($text != "" && $importance != "") {
    include "../conn_db.php";
    $sql = "INSERT INTO announcements (title, text, created_at, expire_at, importance, communities, icon, author_id) VALUES ('$title', '$text', '$created_at', '$expire_at', $importance, $wspolnota_id, '$icon', $author_id);";
    if (mysqli_query($conn, $sql)) {
        //log
        $before = '';
        $after = 'Tytuł: ' . $title . '<br/> Treść: ' . $text . '<br/> Data wygaśnięcia: ' . $expire_at . '<br/> Priorytet: ' . $importance . '<br/> Ostatnia edycja: ' . $edited_at;
        $object_id = mysqli_insert_id($conn);
        $object_type="announcements";
        $action_type = '2';
        $desc = 'Dodano ogłoszenie';
        include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Ogłoszenie zostało dodane';
        $_SESSION['alert_type'] = 'success';
    } else {
        $_SESSION['alert'] = 'Błąd dodawania ogłoszenia';
        $_SESSION['alert_type'] = 'error';
    }
} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'warning';
}
header('Location: ../../');