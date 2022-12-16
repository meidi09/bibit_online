<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Data Pengguna</title>
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
                <h3 class="daftar">Pengguna</h3>
                <button class="btn_menu">Tambah</button>
            </div>

            <div class="table_box">
                <table class="table" id="tabel_ketersediaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th class="aksi">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Nama">John JJ</td>
                            <td data-label="Email">john11122@gmail.com</td>
                            <td data-label="Aksi" class="flex_item">
                                <img src="assets/img/edit-solid.svg" />
                                <img src="assets/img/trash-solid.svg" class="right_image" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>



</body>

</html>