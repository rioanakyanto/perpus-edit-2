<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Digital Liblary</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
    background-color: darkgoldenrod; 
    padding-top: 60px; 
  }
  .container {
    margin-top: 20px;
  }
  
  .alert {
    font-weight: bold;
    text-align: center;
  }

  .tombol {
    font-weight: bold;
  }

  h3{
   font-family: 'Times New Roman', Times, serif;
    color: #080808;
    text-align: center;
  }

  </style>
</head>
<body>
      <div class="container mt-5" class="font-sans-serif">
        <h3>APLIKASI DIGITAL LIBLARY</h3>
        <div class="alert alert-dark" class="alert">
          Anda Login Sebagai <b>Petugas</b> Aplikasi Digital Liblary
        </div>
        <button type="button" class="btn btn-primary">Peminjam</button>
        <button type="button" class="btn btn-primary">Peminjaman</button>
        <button type="button" class="btn btn-primary">History</button>
        <button type="button" class="btn btn-danger">Logout</button>
        <div class="card mt-2" class="card">
          <div class="card-body">
            <?php
        $file = @$_GET['url'];
        if (empty($file)) {
          echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
        } else {
          include $file . '.php';
        }
        ?>
          </div>
        </div>
      </div>
</body>
</html>