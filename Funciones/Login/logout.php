<?php
    session_destroy();
    unset($_SESSION['nivel_usu']);
    header("Location: ../../Login/index.php");
?>
