<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include 'config.php';

if ( empty( $_SESSION['tipe_user'] ) ) {
    $login = "Login";
}
else {
    $login = "Logout";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css"">
<style>

</style>
</head>
<body>
    <div class=" topnav" id="myTopnav">
    <div class="logo">
        <img src="assets/img/1bpdas.png" alt="BPDASHL" />
    </div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="daftar_permohonan.php">Permohonan</a>
        <a href="daftar_persemaian.php">Persemaian</a>
        <?php
        session_destroy();
        ?>
        <a href="login.php"><?php echo $login ?></a>
        <a href="javascript:void(0);" class="icon" onclick="mobile_bars()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    </div>

    <script>
        function mobile_bars() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    </body>

</html>