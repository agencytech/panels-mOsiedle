<?php 
session_start();
session_unset();
session_destroy();
echo '
<script>
localStorage.setItem("mOsiedlePanel", "login");
window.location.href = "../../";
</script>
';
session_start();
$_SESSION['alert'] = 'Wylogowano pomyślnie.';
$_SESSION['alert_type'] = 'success';
//header('Location: ../../');
?>
