<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Ketersediaan</title>
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
                <li><a href="admin_daftar_permohonan.php">Permohonan Bibit</a></li>
                <li><a href="admin_ketersediaan_bibit.php">Data Ketersediaan Bibit</a></li>
                <li><a href="admin_pakai.php">Pakai Bibit</a></li>
                <li><a href="admin_laporan.php">Laporan</a></li>
                <li><a href="admin_pengguna.php">Data Pengguna</a></li>
            </ul>
            <div class="login_button">
                <a href="login.php">LogOut</a>
            </div>
        </div>


        <div class="main_content">
            <div class="daftar_top flex_item">
                <h3 class="daftar">Laporan</h3>

                <select id="laporan" name="laporan">
                    <option value="bulanan">Semua Penggunaan</option>
                    <option value="tahunan">Tahunan</option>
                    <option value="semua">Bulanan</option>
                </select>
            </div>
            <div class="daftar_top flex_item">
                <h3 class="daftar">Bulan</h3>
                <select id="tipe" name="tipe" class="bulan">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </div>

            <div class="daftar_top flex_item">
                <h3 class="daftar">Persemaian</h3>
                <select id="select_persemaian" name="persemaian">
                    <option value="KimaAtas">Kima Atas</option>
                    <option value="TorautUtara">Toraut Utara</option>
                    <option value="LikupangBatuputih">Likupang Batuputih</option>
                </select>
            </div>

            <div class="table_box">
                <table class="table" id="tabel_ketersediaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Bibit</th>
                            <th>Jumlah</th>
                            <th>Riwayat</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Jenis Bibit">Rambutan</td>
                            <td data-label="Jumlah">25</td>
                            <td data-label="Riwayat">
                                <img src="assets/img/circle-arrow-right-solid.svg" />
                            </td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td>25</td>
                        </tr>
                    </tfoot>

                </table>
            </div>


        </div>
    </div>



</body>

</html>