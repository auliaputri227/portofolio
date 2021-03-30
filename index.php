<?php
include 'koneksi.php';
  
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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

    <!-- header -->
    <div class="header">
        <img src="img/heade.jpeg" height="500px" width="100%" alt="">
        <div class="satu">
            <b class="">Hello,</b> <br>
            <b class="">I'm Aulia Putri R</b> <br>
            <b class="">Student majoring in</b> <br>
            <b class="">Software Engineering</b> <br>
            <input type="button" value="Here Me" class="tombol1 btn btn-outline-dark">
            <input type="button" value="Download CV" class="tombol2 btn btn-warning">
        </div>
    </div>
    <!-- end header -->

    <!-- card -->
    <?php $about = mysqli_query($conn,"SELECT * FROM about");?>
    <?php foreach ($about as $w ) :?>
    <div class="about container-fluid ms-3">
        <div class="card-body">
            <img class="lima" src="img/geulis.png" alt="">
            <div class="enam">
                <b class="card-title" >About Me</b>
                <h6 class="card-text mt-4" ><?php echo $w['deskripsi']  ?></h6>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <!-- end card -->

    <!-- testimonial -->
    <div class="testi">
        <h2 class="mt-3 mb-3">Programming Testimonials</h2>
        <div class="container-fluid row row-cols-1 row-cols-md-4 g-4 ps-5">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM testimonial");
            while ($pel = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col">
                    <div class="">
                        <div class="file">
                            <img src="img/<?= $pel['gambar'] ?>" width="200" alt="">
                        </div>
                        <div class="endfile">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <!-- end testimonial -->

    <!-- language skils -->
    <div class="skil">
        <h2 class="text-center mt-3 mb-3">Programming Language Skills</h2>
        <div class="container-fluid row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <img src="img/html.png" class="logoh">
            </div>
            <div class="col">
                <img class="logoc" src="img/css.png">
            </div>
            <div class="col">
                <img src="img/javas.png" class="logoj">
            </div>
            <div class="col">
                <img src="img/php.png" alt="">
            </div>
        </div>
    </div>
    <!-- end language skil -->

    <!-- footer -->
    <div class="footer">
        <img class="img5" src="img/cantikku.png" alt="">
        <b class="apr1">A P R</b>
        <p class="ig">@auliaputririvai</p>
        <b class="f1">Company</b>
        <a href="" class="f2">Home</a>
        <a href="" class="f3">About</a>
        <a href="contact.php" class="f4">Contact</a>
        <a href="login.php" class="f5">Login</a>
        <b class="f6">Connect</b>
        <a href="" class="f7">@aulleaaa_</a>
        <a href="" class="f8">+62 89665304600</a>
        <a href="" class="f9">Telegram</a>
        <a href="https://github.com/auliaputri227" class="f10">Github</a>
        <b class="f11">Connect Via Email :</b>
        <p class="f12">Email Address</p>
        <a class="f13" href="">add</a>

    </div>

    <!-- end footer -->





    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>