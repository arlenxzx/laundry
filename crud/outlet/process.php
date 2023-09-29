<?php
include "../../config/config.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];

//INPUT DATA
if (isset($_POST['inp'])) {
    $q = "INSERT INTO tb_outlet VALUES ('', '$nama', '$alamat', '$no')";
    //EDIT DATA
}elseif (isset($_POST['ed'])) {
    $id = $_POST['id'];
    $q = "UPDATE tb_outlet SET nama = '$nama', alamat = '$alamat', tlp = '$no' WHERE id = $id";
}

if ($con->query($q)) {
    header("Location: ../../master/pages/index.php?page=ot");
}

?>
