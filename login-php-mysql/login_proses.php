<?php
$username   = $_POST['username'];
$pass       = $_POST['password'];

include 'koneksi.php';

$user = mysqli_query($connect ,"select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $rows = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $rows['nama_lengkap'];
    header("location:welcome.php");
}else
{
    header("location:login.php");
}
?>