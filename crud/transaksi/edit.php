<?php
include "../../config/config.php";
$id = $_GET['id'];
$q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_transaksi INNER JOIN tb_detail_transaksi AS d ON tb_transaksi.id = d.id_transaksi INNER JOIN tb_paket ON d.id_paket = tb_paket.id INNER JOIN tb_member ON tb_transaksi.id_member = tb_member.id WHERE tb_transaksi.id = $id"));

?>
    <center>
    <div class="card text-center mt-3"">
        <div class="card-header bg-gradient-primary">
            <div class="card-text text-white h5">Edit Paket Cucian Laundry</div>
        </div>
        <div class="card-body">
            <form action="../../crud/transaksi/process.php" method="post">
                
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Invoice:</span>
                <input type="text" class="form-control" value="<?=$q['kode_invoice']?>" readonly>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Member:</span>
                <input type="text" class="form-control" value="<?=$q['nama']?>" readonly>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Paket:</span>
                <input type="text" class="form-control" value="<?=$q['nama_paket']?>" readonly>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Harga:</span>
                <input type="text" class="form-control" value="Rp. <?= number_format($q['biaya']) ?>,-" readonly>                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Status:</span>
                <select name="status" class="form-select">
                    <option value="Baru">Baru</option>
                    <option value="Proses">Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Diambil">Diambil</option>
                </select>                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold col-1">Nota:</span>
                <select name="nota" class="form-select">
                    <option value="Belum Dibayar">Belum Dibayar</option>
                    <option value="Dibayar">Dibayar</option>
                </select>                
            </div>
        </div>

        <div class="card-footer bg-gradient-primary">
            <input type="submit" name="ed" class="btn btn-success" value="Edit">
            <input type="reset" class="btn btn-warning" value="Reset">
            <a href="index.php?page=tr" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </center>
