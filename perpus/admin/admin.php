<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Digital Liblary</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
    background-color: dimgray; 
    padding-top: 60px; 
  }
  .container {
    margin-top: 20px;
  }
  
  .alert {
    font-weight: bold;
    text-align: center;
  }
  h3{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #080808;
    text-align: center;
  }
  </style>
</head>
<body>
      <div class="container mt-5" class="font-sans-serif">
        <h3>APLIKASI DIGITAL LIBLARY</h3>
        <div class="alert alert-secondary" class="alert">
          Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Digital Liblary
        </div>
        <button type="button" class="btn btn-primary">Administrator</button>
        <button type="button" class="btn btn-primary">Petugas</button>
        <button type="button" class="btn btn-primary">Peminjam</button>
        <button type="button" class="btn btn-primary">Peminjaman</button>
        <button type="button" class="btn btn-primary">Pembayaran</button>
        <button type="button" class="btn btn-primary">History</button>
        <button type="button" class="btn btn-danger position-relative">
        Logout
          <span class="position-absolute top-0 start-100 translate-middle p-2 bg-warning border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
  </span>
</button>
        <div class="card mt-2" class="card">
          <div class="card-body">
            <?php
        $file = @$_GET['url'];
        if (empty($file)) {
          echo "<h4>Selamat Datang Di Halaman Administrator.</h4>";
          echo "Aplikasi Digital Liblary  digunakan untuk mempermudah  siswa / siswi di SMK Management Training Systems Agar Dapat Meminjam Buku Di Digital Liblary.";
        } else {
          include $file . '.php';
        }
        ?>
          </div>
        </div>
      </div>
</body>
</html>