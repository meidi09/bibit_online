<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Ketersediaan</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
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
                <h3 class="daftar">Ketersediaan Bibit Persemaian</h3>
                <select id="select_persemaian" name="persemaian">
                    <option value="KimaAtas">Kima Atas</option>
                    <option value="TorautUtara">Toraut Utara</option>
                    <option value="LikupangBatuputih">Likupang Batuputih</option>
                </select>
                <button class="btn_menu lakukan_permohonan">Tambah Jenis</button>
            </div>

            <div class="table_box">
                <table class="table" id="tabel_ketersediaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Bibit</th>
                            <th>Tipe</th>
                            <th>Ketersediaan</th>
                            <th>Penambahan Terakhir</th>
                            <th>Pengurangan Terakhir</th>
                            <th>Tambah</th>
                            <th class="aksi">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Jenis Bibit">Rambutan</td>
                            <td data-label="Tipe">Buah</td>
                            <td data-label="Ketersediaan">1200</td>
                            <td data-label="Penambahan Terakhir">10 Desember 2022</td>
                            <td data-label="Pengurangan Terakhir">10 Desember 2022</td>
                            <td data-label="Tambah">
                                <img src="assets/img/plus-circle-solid.svg" />
                            </td>
                            <td data-label="Aksi" class="flex_item">
                                <img src="assets/img/edit-solid.svg" />
                                <img src="assets/img/trash-solid.svg" class="right_image" />
                            </td>

                            <!--
                            <td data-label="Aksi" class="flex_item">
                                <img src="assets/img/edit-solid.svg" />
                                <img src="assets/img/trash-solid.svg" />
                            </td>
-->
                        </tr>
                    </tbody>

                </table>
            </div>


        </div>
    </div>



</body>

</html>