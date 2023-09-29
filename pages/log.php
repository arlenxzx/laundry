<?php
session_start();

if (isset($_SESSION['login'])) {
    header("location: index.php");
  }

if (isset($_POST['ok'])) {
    include "../../config/config.php";
    $usn = $_POST['usn'];
    $pw = $_POST['pw'];
    
    $query = (mysqli_query($con,"SELECT id FROM tb_user WHERE username = '$usn' AND password = '$pw'"));
    if (mysqli_num_rows($query) >= 1) {
        $_SESSION['login'] = $usn;
        echo "<script>alert('Berhasil masuk! Selamat datang " . $_SESSION['login'] . "!')</script>";
        echo "<script>location.href='index.php'</script>";
    }else{
        echo "<script>alert('Gagal masuk! Cek username atau password secara benar!')</script>";
    }
}