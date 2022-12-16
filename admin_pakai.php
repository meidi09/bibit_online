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
                <h3 class="daftar">Pakai Bibit</h3>
            </div>

            <form id="pakai_form">
                <fieldset>
                    <label class="Bold no_margin">Persemaian
                        <select id="pilih_persemaian">
                            <option value="kima_atas">Kima Atas</option>
                            <option value="toraut_utara">Toraut Utara</option>
                            <option value="likupang_batuputih">Likupang Batuputih</option>
                        </select>
                    </label>

                    <label id="penganggung_jawab_label" class="form_card">Penganggung Jawab: <input type="text" id="nama" placeholder="Masukan Nama" required /></label>
                    <label id="no_label" class="form_card">Nomor Telepon: <input type="tel" id="no_telp" placeholder="Masukan Nomor Telepon" required /></label>
                    <label id="jumlah_anggota" class="form_card">Jumlah Anggota: <input type="number" id="jumlah" placeholder="Masukan Jumlah Anggota" min="1" max="10000" />(Untuk Kelompok)</label>

                    <Label class="Bold">Rencana Lokasi Penanaman</Label>
                    <label id="nama_lokasi_label" class="form_card">Dusun/Nama Perkebunan: <input type="text" id="nama_lokasi" placeholder="Masukan Nama Dusun/Perkebunan" required /></label>
                    <label id="nama_desa_label" class="form_card">Desa/Kelurahan: <input type="text" id="nama_desa" placeholder="Masukan Nama Desa/Kelurahan" required /></label>
                    <label id="nama_kecamatan_label" class="form_card">Kecamatan: <input type="text" id="nama_kecamatan" placeholder="Masukan Nama Kecamatan" required /></label>
                    <label id="nama_kabupaten" class="form_card">Nama Kebupaten/Kota: <input type="text" id="nama" placeholder="Masukan Nama Kabupaten/Kota" required /></label>

                    <label id="luas_penanaman" class="form_card">Luas Penanaman (Ha): <input type="number" id="luas" min="0" step="any" placeholder="Masukan Luas Penanaman" /></label>
                    <label id="peta_lokasi" class="form_card">Peta Lokasi (Bisa Screenshot Dari Maps, format file: jpg, jpeg, png. Max: 8 MB): <input type="file" id="peta" name="peta" accept="image/png, image/jpeg, image/jpg" /></label>
                    <label>Keterangan:
                        <textarea name="keterangan" rows="3" cols="30" placeholder="Masukan Keterangan Lokasi"></textarea>
                    </label>

                    <Label class="Bold">Kebutuhan Bibit</Label>
                    <label>Persemaian:
                        <select id="pilih_persemaian">
                            <option value="kima_atas">Kima Atas</option>
                            <option value="toraut_utara">Toraut Utara</option>
                            <option value="likupang_batuputih">Likupang Batuputih</option>
                        </select>
                    </label>

                    <div class="form_card jenis_bibit">
                        <label>Jenis Bibit:
                            <select id="jenis_bibit">
                                <option value="rambutan">Rambutan</option>
                            </select>
                        </label>

                        <label id="jumlah_permohonan">Jumlah Permohonan: <input type="number" id="jumlah" placeholder="Masukan Jumlah Bibit" min="1" max="10000" /></label>

                        <label id="Ketersediaan">Jumlah Ketersediaan: <input type="number" id="ketersediaan" disabled /></label>
                    </div>

                    <button class="tambah">Tambah Jenis</button>

                    <label id="jumlah_bibit">Jumlah Bibit: <input type="number" id="jumlah_bibit" disabled /></label>

                    <input type="submit" id="submit" value="Simpan" class="btn_menu submit" />

                </fieldset>
            </form>



        </div>
    </div>



</body>

</html>