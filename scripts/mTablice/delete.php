<?php
session_start();
$id = $_POST['id'];
include "../../scripts/conn_db.php";
if ($id != "") {
    $sql_old = "Select * from mtablice where id='$id'";
    $result_old = $conn->query($sql_old);
    $row_old = $result_old->fetch_assoc();

    $sql = "DELETE FROM mtablice WHERE id='$id';";
    if ($conn->query($sql) === TRUE) {
        $sql_delete_user = "DELETE FROM users WHERE id = " . $row_old['user_id'];
        $conn->query($sql_delete_user);
        //log
        $before = 'Model: ' . $row_old['model'] . '<br/> Data produkcji: ' . $row_old['create_date'] . '<br/> Gwarancja: ' . $row_old['warranty_start'] . ' - ' . $row_old['warranty_end'] . '<br/> Wspólnota: ' . $row_old['wspolnota_id'] . '<br/> Szczegóły: ' . $row_old['place_details'] . '<br/> Opis: ' . $row_old['description'] . '<br/> Hasło: ' . $row_old['password'] . '<br/> Kod zaproszenia: ' . $row_old['invite_code'];
        $after = "";
        $object_id = $id;
        $object_type = "mtablice";
        $action_type = "3";
        $desc = "Usunięto mTablicę";
        include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Pomyślnie usunięto mTablicę';
        $_SESSION['alert_type'] = 'success';
    } else {
        $_SESSION['alert'] = 'Wystąpił błąd podczas usuwania mTablicy';
        $_SESSION['alert_type'] = 'error';
    }
} else {
    $_SESSION['alert'] = 'Nie wybrano mTablicy';
    $_SESSION['alert_type'] = 'warning';
}
header("Location: ../../");
?>