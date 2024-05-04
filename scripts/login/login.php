<?php
include '../conn_db.php';

$email_sha = hash('sha256', $_POST['email']);
$password_sha = hash('sha256', $_POST['password']);

$sql = "SELECT users.fullName, users.id, users.role_id FROM users WHERE email = '".$email_sha."' AND password = '".$password_sha."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    $full_name = $row['fullName'];
    $user_id = $row['id'];
    $role_id = $row['role_id'];

    session_start();
    $_SESSION['logged'] = true;
    $_SESSION['user'] = $full_name;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['role_id'] = $role_id;
    $_SESSION['alert'] = 'Zalogowano pomyślnie.';
    $_SESSION['alert_type'] = 'success';

    if($role_id == 1){
        echo '
        <script>
        localStorage.setItem("mOsiedlePanel", "panelSuperAdmin");
        localStorage.setItem("mOsiedlePanelSite", "users");
        window.location.href = "../../";
        </script>
        ';
    }elseif($role_id == 2){
        echo '
        <script>
        localStorage.setItem("mOsiedlePanel", "panelAdmin");
        localStorage.setItem("mOsiedlePanelSite", "ogloszenia");
        window.location.href = "../../";
        </script>
        ';
    }elseif($role_id == 3){
        echo '
        <script>
        localStorage.setItem("mOsiedlePanel", "panel3rdPartyAdmin");
        localStorage.setItem("mOsiedlePanelSite", "ogloszenia");
        window.location.href = "../../";
        </script>
        ';
    }elseif($role_id == 4){
        echo '
        <script>
        localStorage.setItem("mOsiedlePanel", "panel");
        localStorage.setItem("mOsiedlePanelSite", "ogloszenia");
        window.location.href = "../../";
        </script>
        ';
    }elseif($role_id == 5){
        echo '
        <script>
        localStorage.setItem("mOsiedlePanel", "panelmTablica");
        localStorage.setItem("mOsiedlePanelSite", "ogloszenia");
        window.location.href = "../../";
        </script>
        ';
    }
}else{
    session_start();
    $_SESSION['alert'] = 'Niepoprawne hasło lub login.';
    $_SESSION['alert_type'] = 'error';
    echo '
    <script>
    localStorage.setItem("mOsiedlePanel", "login");
    window.location.href = "../../";
    </script>
    ';
}
?>