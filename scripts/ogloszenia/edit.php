<?php
$title = $_POST['title'];
$text = $_POST['text'];
$expire_at = $_POST['expire_at'];
if ($expire_at == '') {
    $expire_at = '0000-00-00 00:00:00';
}
$importance = $_POST['importance'];
$id = $_POST['id'];

//zmiana formatu expire at z 2024-05-26T16:29:07 na 2024-05-26 16:29:07
$expire_at = str_replace('T', ' ', $expire_at);


session_start();

if ($text != "" && $importance != "" && $id != "") {
    
    include "../conn_db.php";
    $sql_old = "SELECT title, text, expire_at, importance, edited_at FROM announcements where id = $id;";
    $result_old = mysqli_query($conn, $sql_old);
    $row_old = mysqli_fetch_assoc($result_old);

    if ($row_old['title'] != $title || $row_old['text'] != $text || $row_old['expire_at'] != $expire_at || $row_old['importance'] != $importance) {
        $sql = "UPDATE announcements SET title='$title', text='$text', expire_at='$expire_at', importance=$importance, edited_at=now() WHERE id=$id;";
        echo $sql;
        if (mysqli_query($conn, $sql)) {

            //log
            $before = 'Tytuł: ' . $row_old['title'] . '<br/> Treść: ' . $row_old['text'] . '<br/> Data wygaśnięcia: ' . $row_old['expire_at'] . '<br/> Priorytet: ' . $row_old['importance'] . '<br/> Ostatnia edycja: ' . $row_old['edited_at'];
            $after = 'Tytuł: ' . $title . '<br/> Treść: ' . $text . '<br/> Data wygaśnięcia: ' . $expire_at . '<br/> Priorytet: ' . $importance . '<br/> Ostatnia edycja: ' . date('Y-m-d H:i:s');
            $object_id = $id;
            $object_type="announcements";
            $action_type = '1';
            $desc = 'Edyctowano ogłoszenie';
            include "../../scripts/log.php";
            //log

            $_SESSION['alert'] = 'Dane zostały zaktualizowane';
            $_SESSION['alert_type'] = 'success';
        } else {
            $_SESSION['alert'] = 'Błąd aktualizacji danych';
            $_SESSION['alert_type'] = 'error';
        }
    } else {
        $_SESSION['alert'] = 'Nie wprowadzono nowych danych';
        $_SESSION['alert_type'] = 'warning';
    }
} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'warning';
}
header('Location: ../../');
?>