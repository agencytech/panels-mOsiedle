<?php
$warranty_start = $_POST['warranty_start'];
$warranty_end = $_POST['warranty_end'];
$model = $_POST['model'];
$wspolnota = $_POST['wspolnota'];
$place_details = $_POST['details'];
$descritpion = $_POST['description'];
$pswd = $_POST['pswd'];
$invite_code = $_POST['code'];
$id = $_POST['id'];

session_start();
include "../conn_db.php";
$sql_old = "SELECT * FROM mtablice where id = $id;";
$result_old = mysqli_query($conn, $sql_old);
$row_old = mysqli_fetch_assoc($result_old);

if ($warranty_start == '') {
    $warranty_start = '0000-00-00';
}

if ($warranty_end == '') {
    $warranty_end = '0000-00-00';
}

if ($row_old['warranty_start'] != $warranty_start || $row_old['warranty_end'] != $warranty_end || $row_old['model'] != $model || $row_old['wspolnota_id'] != $wspolnota || $row_old['place_details'] != $place_details || $row_old['description'] != $descritpion || $row_old['invite_code'] != $invite_code) {
    $sql = "UPDATE mtablice SET warranty_start='$warranty_start', warranty_end='$warranty_end', model='$model', wspolnota_id='$wspolnota', place_details='$place_details', description='$descritpion', invite_code='$invite_code' WHERE id=$id;";
    if (mysqli_query($conn, $sql)) {
        //log
        $before = 'Data początku gwarancji: ' . $row_old['warranty_start'] . '<br/> Data końca gwarancji: ' . $row_old['warranty_end'] . '<br/> Model: ' . $row_old['model'] . '<br/> Wspólnota: ' . $row_old['wspolnota_id'] . '<br/> Szczegóły miejsca: ' . $row_old['place_details'] . '<br/> Opis: ' . $row_old['description'] . '<br/> Kod zaproszenia: ' . $row_old['invite_code'];
        $after = 'Data początku gwarancji: ' . $warranty_start . '<br/> Data końca gwarancji: ' . $warranty_end . '<br/> Model: ' . $model . '<br/> Wspólnota: ' . $wspolnota . '<br/> Szczegóły miejsca: ' . $place_details . '<br/> Opis: ' . $descritpion . '<br/> Kod zaproszenia: ' . $invite_code;
        $object_id = $id;
        $object_type = "mtablice";
        $action_type = '1';
        $desc = 'Edytowano dane mTablicy';
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

    if($pswd != $row_old['password']) {
        $sql = "UPDATE mtablice SET password='$pswd' WHERE id=$id;";
        $sha_password = hash('sha256', $pswd);
        $sql_users = "UPDATE users SET password='$sha_password' WHERE id=$row_old[user_id];";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_users)) {
            //log
            $before = 'Hasło: ' . $row_old['password'];
            $after = 'Hasło: ' . $pswd;
            $object_id = $id;
            $object_type = "mtablice";
            $action_type = '1';
            $desc = 'Edytowano hasło mTablicy';
            include "../../scripts/log.php";
            //log

            $_SESSION['alert'] = 'Dane zostały zaktualizowane';
            $_SESSION['alert_type'] = 'success';
        } else {
            $_SESSION['alert'] = 'Błąd aktualizacji hasła';
            $_SESSION['alert_type'] = 'error';
        }
    }
}
header('Location: ../../');
?>