<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Zakat</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
<section>
    <div class="container">
        <h1 class="mt-5">Hitung Zakat Penghasilan</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="gaji">Gaji per bulan:</label>
                <input type="text" class="form-control" id="gaji" name="gaji" required>
            </div>
            <div class="form-group">
                <label for="penghasilan">Penghasilan lain per bulan:</label>
                <input type="text" class="form-control" id="penghasilan" name="penghasilan" required>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nisab per tahun</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="81.945.667" disabled>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nisab per bulan</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="6.828.806" disabled>
            </div>
            <button type="submit" class="btn btn-secondary mt-4">Hitung Zakat</button>
        </form>

        <?php
        if (isset($_POST['gaji']) && isset($_POST['penghasilan'])) {
            $gaji = $_POST['gaji'];
            $penghasilan = $_POST['penghasilan'];

           
            if (is_numeric($gaji) && is_numeric($penghasilan)) {
                function totalpenghasilan($gaji, $penghasilan){
                    return $gaji + $penghasilan;
                }
                $nisabTahun = 81945667;
                $nisabBulan = 6828806;

                $totalPenghasilan = totalpenghasilan($gaji, $penghasilan);
                $zakat = 0;

                if ($totalPenghasilan >= $nisabBulan) {
                    $zakat = $totalPenghasilan * 0.025;
                    echo '<div class="alert alert-success mt-3">';
                    echo "<p>Total penghasilan per bulan: Rp " . number_format($totalPenghasilan, 0, ',', '.') . "</p>";
                    echo "<p>Zakat yang harus dibayarkan: Rp " . number_format($zakat, 0, ',', '.') . "</p>";
                    echo "<a href='beranda.php' class='btn btn-secondary'>KEMBALI KE HALAMAN UTAMA</a>";
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-info mt-3">';
                    echo "<p>Anda tidak wajib membayar zakat.</p>";
                    echo "<a href='beranda.php' class='btn btn-secondary'>KEMBALI KE HALAMAN UTAMA</a>";
                    echo '</div>';
                }
            } else {
                echo '<div class="alert alert-danger mt-3">';
                echo "<p>Masukkan nominal gaji dan penghasilan lain.</p>";
                echo '</div>';
            }
        }
        ?>
        
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
