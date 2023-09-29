<?php
include "../../config/config.php";
$id = $_GET['id'];
if ($con->query("DELETE FROM tb_member WHERE id = $id")) {
    header("Location: ../../master/pages/index.php?page=mem");
}