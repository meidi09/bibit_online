<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <title>Halaman Login</title>
  <link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
  <div class="center daftar">
    <img src="assets/img/Lambang_Kementerian_Lingkungan_Hidup_dan_Kehutanan.png" alt="LOGO KLHK" />
    <form method="post" class="login">
      <div class="txt_field email_field">
        <input type="email" name="email" required />
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required />
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" name="login" value="Login" />

      <?php
      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $r = mysqli_fetch_array($data_user);
        $userDb = isset($r['email']);
        $passwordDb = isset($r['password']);


        if ($email == $userDb && $password == $passwordDb) {
          $tipe_user = $r['tipe_user'];
          $id_user = $r['id_user'];
          $_SESSION['tipe_user'] = $tipe_user;
          //echo $_SESSION['type'];
          if ($tipe_user == "admin") {
            header('location:admin_index.php');
          } else {
            header('location:index.php');
          }
        } else {
          echo 'Email dan Password Tidak Sesuai';
        }
      }
      ?>


      <div class="signup_link">Belum Mempunyai Akun? <a href="mendaftar.php"><br>Daftar Sekarang</a></div>
    </form>
  </div>
</body>

</html>