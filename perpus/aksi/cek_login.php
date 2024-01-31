<?php
//mengatifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include '../koneksi/koneksi.php';

//menangkap data yang dikirim dari from login
$username = $_POST['username'];
$password = md5($_POST['password']);

//menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");
//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek> 0){

    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['level']=="admin"){

        //buat session login dan username
        $_SESSION['username']= $username;
        $_SESSION['level'] = "admin";
        //alihkan ke halaman dashbord admin
        header("location:../admin/admin.php");

        //cek jika user login sebagai petugas
    }else if($data['level']=="petugas"){
        //buat session login dan username
        $_SESSION['username']= $username;
        $_SESSION['level'] = "petugas";
        //alihkan ke halaman dashbord admin
        header("location:../admin/petugas.php");

    }else if($data['level']=="peminjam"){
          //buat session login dan username
          $_SESSION['username']= $username;
          $_SESSION['level'] = "peminjam";
          //alihkan ke halaman dashbord admin
          header("location:../admin/peminjaman.php");
    }else{
        //alihkan ke halaman login kembali
        header("location:../login.php?pesan=gagal");
    
    }
    
}else{
    header("location:../admin/admin.php?pesan=gagal");
}
?>