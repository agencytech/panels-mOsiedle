<?php
$name = $_POST['name'];
$sur_name = $_POST['sur_name'];
$email = $_POST['email'];
$role = $_POST['role'];
$wspolnota = $_POST['wspolnoty'];

$password = $_POST['pswd'];
$reapet_password = $_POST['repeat_pswd'];

session_start();

if ($name != "" && $sur_name != "" && $email != "" && $role != "" && $password != "" && $reapet_password != "") {
    
        //sprawdzenie czy w bazie danych jest już konto z tym adresem email
        include "../conn_db.php";
        $sql = "SELECT * FROM users where email = '$email';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION['alert'] = 'Konto z tym adresem email już istnieje';
            $_SESSION['alert_type'] = 'error';
        }else{
            if($password == $reapet_password){
                $sha_password = hash('sha256', $password);
                $sql = "INSERT INTO users (fullName, email, role_id, communities, password) VALUES ('$name $sur_name', '$email', $role, '$wspolnota', '$sha_password');";
                echo $sql;
                if (mysqli_query($conn, $sql)) {
                    $id = mysqli_insert_id($conn);
                    //log
                    $before = '';
                    $after = 'Imię: ' . $name . ' ' . $sur_name . '<br/> Email: ' . $email . '<br/> Rola: ' . $role . '<br/> Wspólnota: ' . $wspolnota;
                    $object_id = $id;
                    $object_type="users";
                    $action_type = '2';
                    $desc = 'Dodano użytkownika użytkownika';
                    include "../../scripts/log.php";
                    //log

                    $_SESSION['alert'] = 'Dane zostały zaktualizowane';
                    $_SESSION['alert_type'] = 'success';
                } else {
                    $_SESSION['alert'] = 'Błąd aktualizacji danych';
                    $_SESSION['alert_type'] = 'error';
                }
            } else {
                $_SESSION['alert'] = 'Podane hasła różnią się od siebie';
                $_SESSION['alert_type'] = 'error';
            }
        }

} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
}
header("Location: ../../");
?>