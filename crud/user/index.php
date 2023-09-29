<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <body class="container-fluid my-3">
    <a href="index.php?page=inpus" class="btn btn-primary my-3">+ TAMBAH DATA</a>
    <table class="table table-secondary table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Outlet</th>
                <th scope="col">Role</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../config/config.php";
            $no = 1;
            $sql = "SELECT a.id AS id, a.nama, a.username AS username, a.role AS role, b.nama AS ot FROM tb_user AS a INNER JOIN tb_outlet AS b ON id_outlet = b.id";
            $q = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($q)):
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['ot'] ?></td>
                <td><?php echo $row['role'] ?></td>
                <td>
                    <a href="../../crud/user/delete.php?id=<?=$row['id']?>" class="bg-primary text-white p-2"><i class="bi bi-eraser"></i></a>
                    <a href="index.php?page=edus&id=<?=$row['id']?>" class="bg-primary text-white p-2"><i class="bi bi-pencil-square"></i></i></a>
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