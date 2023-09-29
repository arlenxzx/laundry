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
            <div class="card-text text-white h5">Input Outlet Laundry</div>
        </div>
        <div class="card-body">
            <form action="../../crud/outlet/process.php" method="post">
                
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Nama:</span>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">                
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text text-bold">Alamat:</span>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">                
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text text-bold">No. Telp:</span>
                <input type="text" name="no" class="form-control" placeholder="cth: 081234567890">                
            </div>

        </div>

        <div class="card-footer bg-gradient-primary">
            <input type="submit" name="inp" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-warning" value="Reset">
            <a href="index.php?page=ot" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </center>
</body>
</html>
