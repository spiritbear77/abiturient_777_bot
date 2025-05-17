<?php
session_start();
if (count($_SESSION['user'])==0) {
    header('location: login.php');
}
?>