<?php
    session_start();
    $_SESSION["userType"]="normalUser";
    header("Location: login.php");
?>