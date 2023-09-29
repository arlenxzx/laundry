<?php
date_default_timezone_set('Asia/Jakarta');
include "../../config/config.php";

if (isset($_POST['inp'])) {
    //menangkap data
    $outlet = $_POST['outlet'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $paket = $_POST['paket'];
    $qty = $_POST['qty'];
    $ket = $_POST['ket'];
    $date = date("Y-m-d H:i");
//menentukan harga
$qPa = mysqli_fetch_array(mysqli_query($con,"SELECT id, harga FROM tb_paket WHERE jenis ='$jenis' AND nama_paket = '$paket'"));
$id = $qPa['id'];
$h = $qPa['harga'];
$harga = $h * $qty;

$qTr = mysqli_query($con,"INSERT INTO tb_transaksi (id_outlet, kode_invoice, id_member, tgl, biaya, id_user) VALUES ('$outlet', '$kode', '$nama', '$date', '$harga', '1')");
$pKt = mysqli_fetch_array(mysqli_query($con,"SELECT id FROM tb_transaksi WHERE kode_invoice = '$kode'"));
$ki = $pKt['id'];
$qDeTr = mysqli_query($con,"INSERT INTO tb_detail_transaksi (id_transaksi, id_paket, qty, keterangan) VALUES ('$ki', '$id', '$qty', '$ket')"); 
if ($qTr && $qDeTr) {
    header("Location: ../../master/pages/index.php?page=tr");
}else{echo "xxx";}
}

if (isset($_POST['ed'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $nota = $_POST['nota'];

    $query = mysqli_query($con,"UPDATE tb_transaksi SET status = '$status', dibayar='$nota' WHERE id = '$id'");
    if ($query) {
        echo "<script>alert('Berhasil diubah!')</script>";
        echo "<script>location.href = '../../master/pages/index.php?page=tr'</script>";
    }else{
        echo "<script>alert('Gagal diubah!')</script>";
        echo "<script>location.href = '../../master/pages/index.php?page=tr'</script>";
    }
}
?>
