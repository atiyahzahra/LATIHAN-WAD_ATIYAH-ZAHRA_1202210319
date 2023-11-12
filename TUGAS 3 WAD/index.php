<?php

require 'dbconn.php';

$product = mysqli_query($conn, "SELECT * from sports_equipments");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>List Alat Olahraga</title>
</head>
<body>
    <div class="container">
        <h1>List Alat Olahraga</h1>
        <a href="insert.php" class="btn btn-primary">Tambah Alat Olahraga</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Olahraga</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php while( $row = mysqli_fetch_assoc($product) ) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row["product_name"]; ?></td>
                    <td><?= $row["brand"]; ?></td>
                    <td><?= $row["description"]; ?></td>
                    <td><?= $row["category"]; ?></td>
                    <td><?= $row["sports"]; ?></td>
                    <td><?= $row["gender"]; ?></td>
                    <td><?= $row["stock"]; ?></td>
                    <td><?= $row["price"]; ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['product_id'] ?>" class="btn btn-success">Ubah</a>
                        <a href="delete.php?id=<?= $row['product_id'] ?>" class="btn btn-danger" onclick="deleteAlert()">Hapus</a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script>
        function deleteAlert() {
            alert("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</body>
</html>