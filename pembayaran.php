<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Muzakki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #paymentMethods {
            display: none;
        }
    </style>
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
<div class="container pt-5">
</div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_muzakki = $_POST['nama_muzakki'];
        $gender = $_POST['gender'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $email = $_POST['email'];
        $nominal_zakat = $_POST['nominal_zakat'];
        $terms = $_POST['terms'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        
        echo "<div class='container center-content'>";
        echo "<div>";
        echo "<div class='card text-center' class='card-header'>";
        echo "<div class='card-body'>";
        echo "<h3 class='text-center'>Pembayaran berhasil diproses!</h3>";
        echo "<p class='text-center'> <b> NAMA MUZAKKI: </b> " . htmlspecialchars($nama_muzakki) . "</p>";
        echo "<p class='text-center'><b>GENDER: </b>" . htmlspecialchars($gender) . "</p>";
        echo "<p class='text-center'><b>NOMOR TELEPON: </b>" . htmlspecialchars($nomor_telepon) . "</p>";
        echo "<p class='text-center'><b>EMAIL: </b>" . htmlspecialchars($email) . "</p>";
        echo "<p class='text-center'><b>NOMINAL ZAKAT: </b>" . htmlspecialchars($nominal_zakat) . "</p>";
        echo "<p class='text-center'><b>TERMS: </b>" . htmlspecialchars($terms) . "</p>";
        echo "<p class='text-center'><b>METODE PEMBAYARAN: </b>" . htmlspecialchars($metode_pembayaran) . "</p>";
        echo "<a href='beranda.php' class='btn btn-secondary'>KEMBALI KE HALAMAN UTAMA</a>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>
</body>
