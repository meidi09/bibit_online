<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Ketersediaan</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/form.css" />
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
            </div>

            <form id="permohonan_form">
                <fieldset>
                    <label class="Bold no_margin">Persemaian
                        <select id="pilih_persemaian">
                            <option value="kima_atas">Kima Atas</option>
                            <option value="toraut_utara">Toraut Utara</option>
                            <option value="likupang_batuputih">Likupang Batuputih</option>
                        </select>
                    </label>

                    <label id="nama_jenis" class="form_card">Nama Jenis Bibit: <input type="text" id="nama" placeholder="Nama Bibit" required /></label>
                    <label id="jumlah" class="form_card">Jumlah Ketersediaan: <input type="number" id="jumlah" placeholder="Masukan Jumlah" min="1" max="100000" /></label>

                    <input type="submit" id="submit" value="simpan" class="btn_menu submit" />

                </fieldset>
            </form>



        </div>
    </div>



</body>

</html>