<?php
session_start();
$id = $_POST['id'];
include "../../scripts/conn_db.php";
//usuwa ogłoszenie
if ($id != "") {
    $sql_old = "Select * from announcements where id='$id'";
    $result_old = $conn->query($sql_old);
    $row_old = $result_old->fetch_assoc();

    $sql = "DELETE FROM announcements WHERE id='$id';";
    if ($conn->query($sql) === TRUE) {
        //log
        $before = 'Tytuł: ' . $row_old['title'] . '<br/> Treść: ' . $row_old['text'] . '<br/> Data wygaśnięcia: ' . $row_old['expire_at'] . '<br/> Priorytet: ' . $row_old['importance'] . '<br/> Ostatnia edycja: ' . $row_old['edited_at'];
        $after = "";
        $object_id = $id;
        $object_type = "announcements";
        $action_type = "3";
        $desc = "Usunięto ogłoszenie";
        include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Pomyślnie usunięto ogłoszenie';
        $_SESSION['alert_type'] = 'success';
    } else {
        $_SESSION['alert'] = 'Wystąpił błąd podczas usuwania ogłoszenia';
        $_SESSION['alert_type'] = 'error';
    }
} else {
    $_SESSION['alert'] = 'Nie wybrano ogłoszenia';
    $_SESSION['alert_type'] = 'warning';
}
header("Location: ../../");
?>