<?php
include "../../config/config.php";
$id = $_GET['id'];
if ($con->query("DELETE FROM tb_detail_transaksi WHERE id_transaksi = $id") && $con->query("DELETE FROM tb_transaksi WHERE id = $id")) {
    header("Location: ../../master/pages/index.php?page=tr");
}
?>