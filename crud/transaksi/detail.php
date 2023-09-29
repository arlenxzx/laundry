<?php
$id = $_GET['id'];
include("../../config/config.php");
$query = mysqli_fetch_array(mysqli_query($con,"SELECT kode_invoice, u.username AS user, m.nama AS member, o.nama AS outlet, tgl, nama_paket, qty, biaya, status, dibayar FROM tb_transaksi AS t INNER JOIN tb_detail_transaksi AS d ON t.id = d.id_transaksi INNER JOIN tb_user AS u ON t.id_user = u.id INNER JOIN tb_member AS m ON t.id_member = m.id INNER JOIN tb_paket AS p ON d.id_paket = p.id INNER JOIN tb_outlet AS o ON t.id_outlet = o.id WHERE t.id = '$id'"));
?>
<div class="card mt-4 mx-auto" style="width: 40rem;">
    <div class="card-header bg-primary">
        <h6 class="text-center text-white"><?= "Transaksi " . $query['kode_invoice'] ?></h6>
    </div>
    <div class="card-body">
        <div class="h6 text-end"><?= date("d-m-Y H:i",(strtotime($query['tgl']))). " - " . $query['user']?></div>
        <div class="h6">Pemesan: <?= $query['member'] ?></div>
        <div class="h6">Outlet: <?= $query['outlet'] ?></div>
        <div class="h6">Paket: <?= $query['nama_paket'] ?></div>
        <div class="h6">Bobot: <?= $query['qty'] ?> Kg</div>
        <div class="h6">Status: <?= $query['status'] ?></div>
        <div class="h6">Nota: <?= $query['dibayar'] ?> </div>
        <div class="h6 text-center">Total: Rp. <?= number_format($query['biaya']) ?>,-</div>
    </div>
    <div class="card-footer text-end">
        <a href="index.php?page=tr" class="btn btn-primary">Kembali</a>
    </div>
</div>