<?php
include "../../config/config.php";
$jenis = $_POST['jenis'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];

//INPUT DATA
if (isset($_POST['inp'])) {
    $q = "INSERT INTO tb_paket VALUES ('', '$jenis', '$paket', '$harga')";
    //EDIT DATA
}elseif (isset($_POST['ed'])) {
    $id = $_POST['id'];
    $q = "UPDATE tb_paket SET jenis = '$jenis', nama_paket = '$paket', harga = '$harga' WHERE id = $id";
}

if ($con->query($q)) {
    header("Location: ../../master/pages/index.php?page=pa");
}

?>
