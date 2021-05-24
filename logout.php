<?php

    session_start();

    session_destroy();

    setcookie("user","");

    header("Location: home.php");
    exit;

?>