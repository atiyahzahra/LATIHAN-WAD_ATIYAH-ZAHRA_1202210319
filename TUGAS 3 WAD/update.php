<?php

require 'dbconn.php';

$id = $_GET['id'];
$product = mysqli_query($conn, "SELECT * FROM sports_equipments WHERE product_id=$id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST["submit"])) {
    $id = $_POST["product_id"];
    $name = $_POST["productname"];
    $brand = $_POST["brand"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $sports = $_POST["sports"];
    $gender = $_POST["gender"];
    $stock = $_POST["stock"];
    $price = $_POST["price"];


    //update data in the table with data from above
    $sql = "UPDATE sports_equipments SET product_name='$name', brand='$brand', description='$description', category='$category', sports='$sports', gender='$gender', stock='$stock', price='$price' WHERE product_id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location:index.php");
    } else {
        echo mysqli_error($conn);
    }
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
    <title>Ubah Data Alat Olahraga</title>
</head>
<body>
    <h1>Tambah Alat Olahraga</h1>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?= $row["product_id"] ?>">
            <div class="row">
                <div class="col-6">
                    <label for="productname" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="productname" name="productname" required value="<?= $row['product_name'] ?>">
                </div>
                <div class="col-6">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand" required value="<?= $row['brand'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description" required value="<?= $row['description'] ?>">
                </div>
                <div class="col-6">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="category" id="category" required value="<?= $row['category'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="sports" class="form-label">Olahraga</label>
                    <input type="text" class="form-control" name="sports" id="sports" required value="<?= $row['sports'] ?>">
                </div>
                <div class="col-6">
                    <label for="gender" class="form-label">Pilih Gender</label>
                    <select class="form-select" aria-label="Default select example" name="gender" id="gender" required>
                        <option <?php echo ($row['gender'] === "--Select Gender--") ? 'selected' : ''; ?>>--Select Gender--</option>
                        <option <?php echo ($row['gender'] === "Men") ? 'selected' : ''; ?> value="Men">Men</option>
                        <option <?php echo ($row['gender'] === "Women") ? 'selected' : ''; ?> value="Women">Women</option>
                        <option <?php echo ($row['gender'] === "Unisex") ? 'selected' : ''; ?> value="Unisex">Unisex</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stock" id="stock" required value="<?= $row['stock'] ?>">
                </div>
                <div class="col-6">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="price" id="price" required value="<?= $row['price'] ?>">
                </div>
            </div>
            <div class="container">
                <div class="mb-3">
                    <input type="submit" class="form-control" value="submit" id="submit" name="submit" onclick="editAlert()">
                </div>
            </div>
        </form>
    </div>
    <script>
        function editAlert() {
            alert("Apakah Anda Yakin ingin mengubah data?");
        }
    </script>
</body>
</html>