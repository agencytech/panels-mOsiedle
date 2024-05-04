<?php
session_start();
if(!isset($_SESSION['logged'])){
  $_SESSION['alert'] = 'Hej hej hej! Zaloguj się najpierw.';
  $_SESSION['alert_type'] = 'error';
  echo '
  <script>
    localStorage.setItem("mOsiedlePanel", "login");
    location.reload();
  </script>
  ';
}else{
    if($_SESSION['role_id'] == 1 or $_SESSION['role_id'] == 4 or $_SESSION['role_id'] == 3 or $_SESSION['role_id'] == 5){
        $_SESSION['alert'] = 'Nie masz uprawnień do przeglądania tej strony.';
        $_SESSION['alert_type'] = 'error';
        echo '
        <script>
            localStorage.setItem("mOsiedlePanel", "login");
            location.reload();
        </script>
        ';
        session_destroy();
    }elseif($_SESSION['role_id'] == 2){
        include '../components/alert.php';
        include '../components/panelAdmin/hero.php';
    }
}
?>
