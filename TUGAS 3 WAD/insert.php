<?php

require 'dbconn.php';

if(isset($_POST['submit'])) {
    $name = $_POST['productname'];
    $brand = $_POST['brand'];
    $desc = $_POST['description'];
    $category = $_POST['category'];
    $sports = $_POST['sports'];
    $gender = $_POST['gender'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    $query = "INSERT INTO sports_equipments VALUES ('', '$name', '$brand', '$desc', '$category', '$sports', '$gender', '$stock', '$price')";
    $result = mysqli_query($conn, $query);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mb-3 {
            margin: 30px;
        }
        .form-control {
            width: 500px;
        }
    </style>
    <title>Input Alat Olahraga</title>
</head>
<body>
    <h1>Tambah Alat Olahraga</h1>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <label for="productname" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="productname" name="productname">
                </div>
                <div class="col-6">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="col-6">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="category" id="category">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="sports" class="form-label">Olahraga</label>
                    <input type="text" class="form-control" name="sports" id="sports">
                </div>
                <div class="col-6">
                    <label for="gender" class="form-label">Pilih Gender</label>
                    <select class="form-select" aria-label="Default select example" name="gender" id="gender">
                        <option selected>--Select Gender--</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stock" id="stock">
                </div>
                <div class="col-6">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="price" id="price">
                </div>
            </div>
            <div class="container">
                <div class="mb-3">
                    <input type="submit" class="form-control" value="submit" id="submit" name="submit">
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $result ) : ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>