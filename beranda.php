<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title> ZAKAT YUK! </title>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
<div class="container">
<div class="container-fluid">
<a class="navbar-brand" href="#">
<img src="img/desc.jpeg" alt="Logo" width="130" height="100" class="d-inline-block align-text-center"> <b>ZAKAT YUK!</b> 
</a>
</div>
</div>
</nav>

<!-- header -->
<section class="header text-center text-sm-start mt-5">
    <div class="container">
        <div class="d-flex align-items-center">
        <div>
            <h1>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            TUNAIKAN KEWAJIBAN ZAKATMU
            <br>
            </h1>
            <p>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <b>Zakat adalah bagian tertentu dari harta yang wajib dikeluarkan oleh setiap muslim apabila telah mencapai syarat yang ditetapkan. Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak menerimanya (asnaf).</b>
            <br>
            <br>"Dan laksanakanlah sholat, tunaikanlah zakat, dan rukuklah beserta orang yang rukuk."
            <br>(QS. Al-Baqarah 2: Ayat 43).
            </p>
        </div>
        <img src="img/desc.jpeg" class="img-fluid w-50 d-none d-sm-block" alt="header">

    </div>
</section>

<!-- services -->
<section class="pt-5" id="services">
    <div class="container">
    <div class="row text-center g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="img/Nav_Kalkulator_Off.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KALKULATOR ZAKAT</h5>
                    <p class="card-text">Ketahui jumlah zakat yang harus kamu tunaikan di sini</p>
                    <form action="kalkulatorzakat.php" method="post">
                        <input type="submit" class="btn btn-secondary" value="HITUNG ZAKATMU">
                    </form>
                </div>
            </div>
        </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/Nav_Sedekah_Off.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ZAKAT</h5>
                        <p class="card-text">Setorkan zakatmu di sini <br> <br> </p>
                        <form action="zakat.php" method="post">
                            <input type="submit" class="btn btn-secondary" value="ZAKAT SEKARANG">
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<html >