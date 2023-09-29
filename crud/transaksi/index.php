<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <body class="container-fluid my-3">
    <a href="index.php?page=inptr" class="btn btn-primary my-3">+ TAMBAH DATA</a>
    <table class="table table-secondary table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Outlet</th>
                <th scope="col">Kode Invoice</th>
                <th scope="col">Pemesan</th>
                <th scope="col">Tanggal Pesanan</th>
                <th scope="col">Biaya</th>
                <th scope="col">Status</th>
                <th scope="col">Dibayar</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../config/config.php";
            $no = 1;
            $sql = "SELECT tb_transaksi.id as id, tb_outlet.nama as o, tb_transaksi.kode_invoice as ki, tb_member.nama as m, tb_transaksi.tgl as t, tb_transaksi.biaya as b, tb_transaksi.status as s, tb_transaksi.dibayar as d, tb_user.nama as ksr FROM tb_transaksi INNER JOIN tb_outlet ON id_outlet = tb_outlet.id INNER JOIN tb_member ON id_member = tb_member.id INNER JOIN tb_user ON id_user = tb_user.id";
            $q = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($q)):
            ?>
            <tr class="">
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['o'] ?></td>
                <td><a href="index.php?page=dtr&id=<?=$row['id']?>"><?php echo $row['ki'] ?></a></td>
                <td><?php echo $row['m'] ?></td>
                <td><?=  date("d F Y",strtotime($row['t']))?></td>
                <td>Rp. <?php echo number_format($row['b']) . ",-" ?></td>
                <td><?php echo $row['s'] ?></td>
                <td><?php echo $row['d'] ?></td>
                <td>
                    <a href="../../crud/transaksi/delete.php?id=<?=$row['id']?>" class="bg-primary text-white p-2"><i class="bi bi-eraser"></i></a>
                    <a href="index.php?page=edtr&id=<?=$row['id']?>" class="bg-primary text-white p-2"><i class="bi bi-pencil-square"></i></i></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>