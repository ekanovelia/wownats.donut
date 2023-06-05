<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #c0aff0;">
        <h1 class="fw-bolder text-white">Wownats.Donut</h1>
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="tambah_menu.php" class="btn btn-success mb-3">Tambah Menu</a>

        <table class="table table-striped text-justify">
            <thead class="table-success">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "Koneksi.php";
                $sql = "SELECT * FROM `wownats`";
                $result = mysqli_query($koneksi,$sql);
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                    <td><?php echo $row['jumlah'] ?></td>
                    <td><?php echo $row['deskripsi'] ?></td>
                    <td>
                        <a href="tambah_menu.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                class="bi bi-pencil-square fs-5 me-3"></i></a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                class="bi bi-trash3-fill fs-5 me-3 "></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>