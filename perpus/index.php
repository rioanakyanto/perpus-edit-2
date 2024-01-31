<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="mts-removebg-preview.png" type="image/x-icon">
</head>
<body>
    
<div class="container">
    <div class="login">
        <form action="aksi/cek_login.php" method="post">
            <h1>Silahkan Login Untuk Melanjutkan!</h1>

            <label for="">Username :</label>
            <input type="text" >
            <label for="">Password :</label>
            <input type="password" >
            <button>login</button>
            <p>
            Saya belum memiliki akun.Buat<a href="register.php">Disini</a>
            </p>
        </form>
    </div>
    <div class="right">
    <img src="asset/login.png" alt="Deskripsi Gambar">
    </div>
</body>
</html>