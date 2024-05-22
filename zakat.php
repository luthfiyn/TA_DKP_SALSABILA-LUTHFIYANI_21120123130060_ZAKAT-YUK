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
    <div class="container mt-5">
        <h2>DATA MUZAKKI</h2>
        <form id="zakatForm">
            <div class="form-group">
                <label for="nama_muzakki"><b>NAMA MUZAKKI</b></label>
                <input type="text" class="form-control" id="nama_muzakki" name="nama_muzakki" required>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="bapak" value="Laki-Laki" required>
                    <label class="form-check-label" for="bapak">LAKI-LAKI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="ibu" value="Perempuan" required>
                    <label class="form-check-label" for="ibu">PEREMPUAN</label>
                </div>
            </div>
            <div class="form-group">
                <label for="nomor_telepon"><b>NOMOR TELEPON</b></label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
            </div>
            <div class="form-group">
                <label for="email"><b>EMAIL</b></label>
                <input type="email" class="form-control" id="email" name="email" required>
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="nominal_zakat"><b>MASUKKAN NOMINAL ZAKAT</b></label>
                <input type="text" class="form-control" id="nominal_zakat" name="nominal_zakat" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms"><b>SAYA MENYETUJUI SYARAT DAN KETENTUAN</b></label>
            </div>
            <button type="button" class="btn btn-secondary" onclick="tampilkanmetodepembayaran()">PILIH METODE PEMBAYARAN</button>
        </form>
        
        <div id="paymentMethods" class="mt-3">
            <h3>Metode Pembayaran</h3>
            <form action="pembayaran.php" method="POST">
                <input type="hidden" name="nama_muzakki" id="hidden_nama_muzakki">
                <input type="hidden" name="gender" id="hidden_gender">
                <input type="hidden" name="nomor_telepon" id="hidden_nomor_telepon">
                <input type="hidden" name="email" id="hidden_email">
                <input type="hidden" name="nominal_zakat" id="hidden_nominal_zakat">
                <input type="hidden" name="terms" id="hidden_terms">
                
                <div class="form-group">
                    <label for="metode_pembayaran">Pilih Metode Pembayaran:</label>
                    <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                        <option value="transfer bank">Transfer Bank</option>
                        <option value="Kartu kredit">Kartu Kredit</option>
                        <option value="E-wallet">E-Wallet</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">BAYAR SEKARANG</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function tampilkanmetodepembayaran() {
            document.getElementById('hidden_nama_muzakki').value = document.getElementById('nama_muzakki').value;
            document.querySelector('input[name="gender"]:checked').value ? 
            document.getElementById('hidden_gender').value = document.querySelector('input[name="gender"]:checked').value : null;
            document.getElementById('hidden_nomor_telepon').value = document.getElementById('nomor_telepon').value;
            document.getElementById('hidden_email').value = document.getElementById('email').value;
            document.getElementById('hidden_nominal_zakat').value = document.getElementById('nominal_zakat').value;
            document.getElementById('hidden_terms').value = document.getElementById('terms').checked ? 'Accepted' : 'Not accepted';
            document.getElementById('paymentMethods').style.display = 'block';
        }
    </script>
</body>
</html>
