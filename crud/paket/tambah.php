<?php
include "../../config/config.php";
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
        <div class="card-header bg-gradient-primary">
            <div class="card-text text-white h5">Input Paket Cucian Laundry</div>
        </div>
        <div class="card-body">
            <form action="../../crud/paket/process.php" method="post">

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Jenis:</span>
                <select name="jenis" class="form-select">
                    <option value="">-- Pilih Jenis Paket --</option>
                    <option value="Kiloan">Kiloan</option>
                    <option value="Selimut">Selimut</option>
                    <option value="Bed Cover">Bed Cover</option>
                    <option value="Kaos">Kaos</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Nama Paket:</span>
                <select name="paket" class="form-select">
                    <option value="">-- Pilih Nama Paket --</option>
                    <option value="Cuci Kering">Cuci Kering</option>
                    <option value="Cuci Kering Setrika">Cuci Kering Setrika</option>
                    <option value="Express">Express</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Harga:</span>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">                
            </div>
        </div>

        <div class="card-footer bg-gradient-primary">
            <input type="submit" name="inp" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-warning" value="Reset">
            <a href="index.php?page=pa" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </center>
</body>
</html>
