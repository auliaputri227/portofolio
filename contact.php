<?php
include 'koneksi.php';    
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $sql = "INSERT INTO contact (nama,email,pesan) 
    VALUES ('$nama','$email','$pesan')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Selamat Data Anda Sudah Masuk')</script>";
    } else {
        header('location: contact.php?status=gagal');
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <title>PortofolioQ</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light text-white ">
        <div class="navbar container-fluid text-light  ">
            <a class="navbar-brand ms-4" href="#">APR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbarnav me-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->





    <!-- contact -->

    <section id="contact">
        <div class="container " style=" font-family : Montserrat, sans-serif;">
            <div class="row mb-1  text-secondary text-center">
                <div class="col mt-5">
                    <h3>Leave a message </h3>
                </div>
            </div>
            <form method="POST" name="forminput">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="container">

                                <form action="simpan.php" method="post">

                                    <div class="form-group row ">
                                        <label for="nama" class="col-sm-8 col-form-label">Nama </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-8 col-form-label">Email</label>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control mb-2" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pesan" class="col-sm-8 col-form-label">Pesan </label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control mb-2" name="pesan" id="pesan">
                                        </div>
                                    </div>
                                </form>

                                <input type="submit" name="simpan" value="Submit"
                                    class="btn mt-2 mb-3 text-white rounded-pill"
                                    style="background-color:  #F5B301; width:130px;">

                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>

    <!-- contact tutup -->









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>