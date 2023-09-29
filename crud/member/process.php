<?php
include "../../config/config.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$no = $_POST['no'];

//INPUT DATA
if (isset($_POST['inp'])) {
    $q = "INSERT INTO tb_member VALUES ('', '$nama', '$alamat', '$jk', '$no')";
    //EDIT DATA
}elseif (isset($_POST['ed'])) {
    $id = $_POST['id'];
    $q = "UPDATE tb_member SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jk', tlp = '$no' WHERE id = $id";
}

if ($con->query($q)) {
    header("Location: ../../master/pages/index.php?page=mem");
}

?>
