<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Permohonan Bibit</title>

    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/form.css" />

</head>

<body>

    <main>
        
        <div class="daftar_top flex_item">
            <h3 class="daftar">Permohonan Bibit</h3>
        </div>

        <div>
            <form id="permohonan_form">
                <fieldset>
                <label class="Bold no_margin">Status
                        <select id="status">
                            <option value="menunggu">Menunggu</option>
                            <option value="disetujui">Disetujui</option>
                            <option value="selesai">Selesai</option>
                            <option value="ditolak">Ditolak</option>
                            <option value="dibatalkan">Dibatalkan</option>
                        </select>
                    </label>

                    <Label class="Bold">Data Pemohon</Label>
                    <label class="form_card">Tipe Pemohon:<br>
                        <label><input type="radio" name="radio_btn" value="perorangan" class="inline" required /> Perorangan</label>
                        <label><input type="radio" name="radio_btn" value="kelompok" class="inline" /> Kelompok</label>
                    </label>

                    <label id="nama_label" class="form_card">Nama Perorangan/Kelompok: <input type="text" id="nama" placeholder="Masukan Nama" required /></label>
                    <label id="no_label" class="form_card">Nomor Telepon: <input type="tel" id="no_telp" placeholder="Masukan Nomor Telepon" required /></label>
                    
                    <label id="jumlah_anggota" class="form_card">Jumlah Anggota: <input type="number" id="jumlah" placeholder="Masukan Jumlah Anggota" min="1" max="10000" />(Untuk Kelompok)</label>

                    <label id="foto_ktp" class="form_card">KTP/Fotokopi KTP (Format file: jpg, jpeg, png. Max: 8 MB): <input type="file" id="ktp" name="ktp" accept="image/png, image/jpeg, image/jpg" /></label>

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

                    <label id="jumlah_bibit">Jumlah Bibit: <input type="number" id="jumlah_bibit" disabled /></label>

                    <input type="submit" id="submit" value="simpan" class="btn_menu submit" />

                </fieldset>
            </form>

        </div>

    </main>

</body>

</html>