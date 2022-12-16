<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/daftar_permohonan.css" />
<style>

</style>
</head>
<body>

    <div class=" wrapper">
    <div class="sidebar">
        <img src="assets/img/Lambang_Kementerian_Lingkungan_Hidup_dan_Kehutanan.png" alt="LOGO KLHK" />
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="halaman-about1.php">About</a></li>
        </ul>
        <div class="login_button">
            <a href="halaman-login.php">Login</a>
        </div>
    </div>
    <div class="main_content">
        <div class="table_box">
            <table class="table" id="tabel_ketersediaan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Persemaian</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Lihat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="No">1</td>
                        <td data-label="Nama">John</td>
                        <td data-label="Persemaian">Kima Atas</td>
                        <td data-label="Jumlah">90</td>
                        <td data-label="Status">Disetujui</td>
                        <td data-label="Keterangan">Ambil Sebelum 12 Oktober 2022</td>
                        <td data-label="Lihat">
                            <img src="assets/img/circle-arrow-right-solid.svg" />
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    </div>



    </body>

</html>



<!--
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    -->