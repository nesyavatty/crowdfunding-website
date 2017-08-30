<?php

include('koneksi.php');

session_start();
 

$username = $_POST['ni_user'];
$password = $_POST['pass_user'];
 

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 

if (empty($username) && empty($password)) {
    
    header('location:index.php?salah=1');
    break;
} else if (empty($username)) {
    
    header('location:index.php?salah=2');
    break;
} else if (empty($password)) {
    
    header('location:index.php?salah=3');
    break;
}
 
$admin = mysql_query("select * from admin where username='$nama_admin' and password='$pass_admin'");
$user =mysql_query("select * from user where username='$ni_user' and password='$pass_user'");
 
// if (mysql_num_rows($q) == 1) {
//     $_SESSION['username'] = $username;
//     header('location:admin.php');
// } else {
//     header('location:loginadmin.php?salah=4');
// }

if (mysql_num_rows($admin) == 1) {
    $_SESSION['nama_admin'] = $username;
    header('location:admin.php');
} else if
    (mysql_num_rows($user) == 1) {
    $_SESSION['ni_user'] = $username;
    header('location:../home.php');
}  else {
    header('location:index.php?salah=4');
}
?>