<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $sql = "INSERT INTO `wownats`(`nama`, `jumlah`, `harga`, `deskripsi`) VALUES ('$nama','$jumlah','$harga', '$deskripsi')";
    $result = $koneksi->query($sql);

    if($result) {
        header("location: admin.php?msg=Data Baru Berhasil Ditambahkan");
    }
    else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #c0aff0;">
        Wownats.Donut
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Tambah Menu Baru</h3>
            <p class="text-muted">Tuliskan menu baru</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" name="nama" placeholder="">
                    </div>
                </div>
                    <div class="col">
                        <label class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="">
                    </div>
                    <div class="col">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="">
                    </div>
                    <div class="col">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan Data</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>