<?php
session_start();

$model = $_POST['model'];
$warranty_start = $_POST['warranty_start'];
$warranty_end = $_POST['warranty_end'];
$wspolnota = $_POST['wspolnota'];
$details = $_POST['details'];
$description = $_POST['description'];
$pswd = $_POST['pswd'];
$code = $_POST['code'];

if ($warranty_start == '') {
    $warranty_start = '0000-00-00';
}

if ($warranty_end == '') {
    $warranty_end = '0000-00-00';
}

include "../conn_db.php";
if($model !="" and $pswd !=""){
    $sql_check_avaible_serial = "select id from mtablice order by id desc limit 1;";
    $result_check_avaible_serial = mysqli_query($conn, $sql_check_avaible_serial);
    $row_check_avaible_serial = mysqli_fetch_assoc($result_check_avaible_serial);
    $serial = $row_check_avaible_serial['id'] + 1;
    $serial = str_pad($serial, 4, '0', STR_PAD_LEFT);
    $serial = 'mTablica-'.$serial;
    $status_id = 0;

    $password = hash('sha256', $pswd);
    $email = $serial . '@mosiedle.pl';
    //email małe litery
    $email = strtolower($email);

    $sql_add_users_account = "INSERT INTO users (fullName, email, password, role_id, communities, created_at) VALUES ('$serial', '$email', '$password', 5, NULL, NOW());";
    if (mysqli_query($conn, $sql_add_users_account)) {
        $user_id = mysqli_insert_id($conn);
    } else {
        $_SESSION['alert'] = 'Błąd dodawania użytkownika';
        $_SESSION['alert_type'] = 'error';
    }
    $sql = "INSERT INTO mtablice (model, warranty_start, warranty_end, wspolnota_id, place_details, description, password, invite_code, user_id, create_date, serial) VALUES ('$model', '$warranty_start', '$warranty_end', '$wspolnota', '$details', '$description', '$pswd', '$code', $user_id, NOW(), '$serial');";
    if (mysqli_query($conn, $sql)) {
        //log
        $before = '';
        $after = 'Model: ' . $model . '<br/> Data produkcji: ' . date('Y-m-d') . '<br/> Gwarancja: ' . $warranty_start . ' - ' . $warranty_end . '<br/> Wspólnota: ' . $wspolnota . '<br/> Szczegóły: ' . $details . '<br/> Opis: ' . $description . '<br/> Hasło: ' . $pswd . '<br/> Kod zaproszenia: ' . $code;
        $object_id = mysqli_insert_id($conn);
        $object_type="mtablice";
        $action_type = '2';
        $desc = 'Dodano mTablicę';
        include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Dodano nową mTablicę';
        $_SESSION['alert_type'] = 'success';
    } else {
        $_SESSION['alert'] = 'Błąd dodawania mTablicy';
        $_SESSION['alert_type'] = 'error';
    }
}else{
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich niezbędnych danych';
    $_SESSION['alert_type'] = 'warning';
}
header("Location: ../../");
?>