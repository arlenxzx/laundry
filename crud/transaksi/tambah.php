<?php
include "../../config/config.php";
$qOutlet = mysqli_query($con, "SELECT * FROM tb_outlet");
$qMember = mysqli_query($con, "SELECT * FROM tb_member");
$Paket = mysqli_query($con, "SELECT * FROM tb_paket");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body class="container">
    <center>
    <div class="card text-center mt-3"">
        <div class="card-header bg-primary">
            <div class="card-text text-white h5">Input Order Laundry </div>
        </div>
        <div class="card-body">
            <form action="../../crud/transaksi/process.php" method="post">
                
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Outlet:</span>
                <select name="outlet" class="form-select">
                    <option value="">-- Pilih Outlet --</option>
                    <?php while ($optOutlet = mysqli_fetch_array($qOutlet)) : ?>
                        <option value="<?php echo $optOutlet['id'] ?>"><?php echo $optOutlet['nama'] ?></option>
                    <?php endwhile; ?>
                </select>
                </div>
                
                <input type="hidden" name="kode" value="<?= strtoupper(uniqid()) ?>">
                
                <div class="input-group mb-3">
                <span class="input-group-text text-bold">Pemesan:</span>
                <select name="nama" class="form-select">
                    <option value="">-- Pilih Outlet --</option>
                    <?php while ($optNama = mysqli_fetch_array($qMember)) : ?>
                        <option value="<?php echo $optNama['id'] ?>"><?php echo $optNama['nama'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Jenis:</span>
                <select name="jenis" class="form-select">
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Kiloan">Kiloan</option>
                    <option value="Selimut">Selimut</option>
                    <option value="Bed Cover">Bed Cover</option>
                    <option value="Kaos">Kaos</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Paket:</span>
                <select name="paket" class="form-select">
                    <option value="">-- Pilih Paket --</option>
                    <option value="Cuci Kering">Cuci Kering</option>
                    <option value="Cuci Kering Setrika">Cuci Kering Setrika</option>
                    <option value="Express">Express</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Berat:</span>
                <input type="number" min="1" step="0.1" name="qty" placeholder="cth* 2,5" class="form-control">                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Keterangan:</span>
                <input type="text" name="ket" placeholder="* Tidak Wajib" class="form-control">
            </div>

        </div>

        <div class="card-footer bg-primary">
            <input type="submit" name="inp" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-warning" value="Reset">
            <a href="index.php?page=tr" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </center>
</body>
</html>
