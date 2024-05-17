<?php
$name = $_POST['name'];
$sur_name = $_POST['sur_name'];
$email = $_POST['email'];
$role = $_POST['role'];
$wspolnota = $_POST['wspolnoty'];
$id = $_POST['id'];

$password = $_POST['pswd'];
$reapet_password = $_POST['repeat_pswd'];

session_start();

if ($name != "" && $sur_name != "" && $email != "" && $role != "" && $id != "") {
    
    include "../conn_db.php";
    $sql_old = "SELECT users.id, users.fullName, users.email, role_id, communities FROM users where users.id = $id;";
    $result_old = mysqli_query($conn, $sql_old);
    $row_old = mysqli_fetch_assoc($result_old);

    if ($row_old['fullName'] != $name . ' ' . $sur_name || $row_old['email'] != $email || $row_old['role_id'] != $role || $row_old['communities'] != $wspolnota) {
        $sql = "UPDATE users SET fullName='$name $sur_name', email='$email', role_id=$role, communities='$wspolnota' WHERE id=$id;";
        echo $sql;
        if (mysqli_query($conn, $sql)) {

            //log
            $before = 'Imię: ' . $row_old['fullName'] . '<br/> Email: ' . $row_old['email'] . '<br/> Rola: ' . $row_old['role_id'] . '<br/> Wspólnota: ' . $row_old['communities'];
            $after = 'Imię: ' . $name . ' ' . $sur_name . '<br/> Email: ' . $email . '<br/> Rola: ' . $role . '<br/> Wspólnota: ' . $wspolnota;
            $object_id = $id;
            $object_type="users";
            $action_type = '1';
            $desc = 'Edyctowano użytkownika';
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

        if($password != "" && $reapet_password != ""){
            if($password == $reapet_password){
                $sha_password = hash('sha256', $password);
                $sql = "UPDATE users SET password='$sha_password' WHERE id=$id;";
                echo $sql;
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['alert'] = 'Dane zostały zaktualizowane';
                    $_SESSION['alert_type'] = 'success';

                    //log
                    $before = '';
                    $after = 'Hasło: ' . $password;
                    $object_id = $id;
                    $object_type="users";
                    $action_type = '1';
                    $desc = 'Edyctowano hasło użytkownika';
                    include "../../scripts/log.php";
                    //log

                } else {
                    $_SESSION['alert'] = 'Błąd aktualizacji danych';
                    $_SESSION['alert_type'] = 'error';
                }
            } else {
                $_SESSION['alert'] = 'Podane hasła różnią się od siebie';
                $_SESSION['alert_type'] = 'error';
            }
        }
    }
    //przyrównanie czy nowe dane faktycznie są nowe

} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
}
header("Location: ../../");
?>