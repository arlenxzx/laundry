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
            <div class="card-text text-white h5">Input User Laundry</div>
        </div>
        <div class="card-body">
            <form action="../../crud/user/process.php" method="post">
                
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Nama:</span>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Username:</span>
                <input type="text" name="usn" class="form-control" placeholder="Masukkan Username">                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Password:</span>
                <input type="password" name="pw" class="form-control" placeholder="Masukkan Password">                
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Outlet:</span>
                <select name="outlet" class="form-select">
                    <option value="">-- Pilih Outlet --</option>
                    <?php 
                    $query = mysqli_query($con, "SELECT id, nama FROM tb_outlet");
                    while ($o = mysqli_fetch_array($query)) : ?>
                        <option value="<?php echo $o['id'] ?>"><?php echo $o['nama'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Role:</span>
                <select name="role" class="form-select">
                    <option value="">-- Pilih role --</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option>
                </select>
            </div>

        </div>

        <div class="card-footer bg-gradient-primary">
            <input type="submit" name="inp" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-warning" value="Reset">
            <a href="index.php?page=us" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </center>
</body>
</html>
