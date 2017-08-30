<?php

session_start();
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['ni_user']) || empty($_SESSION['ni_user'])) {
    //redirect ke halaman login
    header('location:../home.php');
}
?>