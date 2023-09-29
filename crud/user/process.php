<?php
include "../../config/config.php";
$nama = $_POST['nama'];
$usn = $_POST['usn'];
$outlet = $_POST['outlet'];
$role = $_POST['role'];
@$pw = $_POST['pw'];

//INPUT DATA
if (isset($_POST['inp'])) {
    $q = "INSERT INTO tb_user VALUES ('', '$nama', '$usn', '$pw', '$outlet', '$role')";
    //EDIT DATA
}elseif (isset($_POST['ed'])) {
    $id = $_POST['id'];
    $q = "UPDATE tb_user SET nama = '$nama', username = '$usn', id_outlet = '$outlet', role = '$role' WHERE id = $id";
}

if ($con->query($q)) {
    header("Location: ../../master/pages/index.php?page=us");
}

?>
