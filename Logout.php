<?php
    session_start();
    SetCookie (session_name(), "", time()-3600);
    unset($_SESSION["ID"]);
    unset($_POST);
    session_destroy();
    header("Location:Homepage.php");
?>
