<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <title>Halaman Daftar</title>
  <link rel="stylesheet" href="assets/css/login.css" />



</head>

<body>
  <div class="center">
    <img src="assets/img/Lambang_Kementerian_Lingkungan_Hidup_dan_Kehutanan.png" alt="LOGO KLHK" />
    <div class="txt_daftar" id="txt_daftar">Daftar Akun</div>
    <form method="post" class="daftar">
      <div class="txt_field email_field">
        <input type="email" name="email" required />
        <span></span>
        <label>Email</label>
      </div>

      <div class="txt_field">
        <input type="text" name="nama_user" required />
        <span></span>
        <label>Masukan Nama Anda</label>
      </div>

      <div class="txt_field">
        <input type="password" name="password" required />
        <span></span>
        <label>Password</label>
      </div>

      <div class="txt_field">
        <input type="password" name="password_confirm" required />
        <span></span>
        <label>Konfirmasi Password</label>
      </div>

      <input type="submit" name="daftar" value="Daftar" />
      <?php

      //Memasukan Pendaftaran
      if (isset($_POST['daftar'])) {
        $email = $_POST['email'];
        $nama_user = $_POST['nama_user'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        //cek password jika sama
        if ($password == $password_confirm) {


          $data_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
          $r = mysqli_fetch_array($data_user);
          $userDb = isset($r['email']);

          //cek email yang sudah pernah mendaftar
          if ($email == $userDb) {
            $email_sama = "Email " . $email . " Sudah Pernah Mendaftar";
            echo "<script type='text/javascript'>
              alert('$email_sama');
            </script>";
          } 
          else {
            //akun berhasil terdaftar
            $query = "INSERT INTO `user` (`id_user`, `email`, `password`, `tipe_user`, `nama_user`) VALUES (NULL, '$email', '$password', 'masyarakat', '$nama_user')";
            $result = mysqli_query($conn, $query);
            if ($result) {
              $berhasil = "Email " . $email . " Berhasil Terdaftar";
              echo "<script type='text/javascript'>
                alert('$berhasil');
                window.location='login.php';
              </script>";
            } 
            else {
              echo "<script>alert('Gagal')</script>";
            }
          }
        } else {
          echo "<script>alert('Password Tidak Sesuai')</script>";
        }
      }
      ?>

      <div class="signup_link">Sudah Punya Akun? <a href="login.php"><br>Masuk Dengan Akun</a></div>
    </form>
  </div>
</body>

</html>