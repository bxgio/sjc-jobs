<?php
session_start();


    if (isset($_GET['log'])) {
        unset($_SESSION["id"]);
        if (!isset($_SESSION['id'])) {
            header("location:login.php");
        }
    }

?>