<?php
session_start();
include 'config.php';
//debug

if (empty($_GET['id_persemaian'])) {
    header("Location: test_permohonan.php?id_persemaian=1");
    exit;
}


if (empty($_SESSION['id_user'])) {
    $id_user = "26";
} else {
    $id_user = $_SESSION['id_user'];
}

//echo "<script>console.log('Debug Objects: " . $id_user . "' );</script>"; 

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Permohonan Bibit</title>

    <link rel="stylesheet" href="styles.css" />

    <link rel="stylesheet" href="assets/css/form.css" />

    <!--<script src="permohonan.js"></script> -->

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <main>
        <div class="daftar_top flex_item">
            <h3 class="daftar">Permohonan Bibit</h3>
            <button class="btn_menu lakukan_permohonan">Nonton Video Tutorial Pengisian</button>
        </div>

        <div>
            <form method="post" id="permohonan_form">
                <fieldset>
                    <Label class="Bold">Kebutuhan Bibit</Label>
                    <label>Persemaian:
                        <select id="pilih_persemaian" name="pilih_persemaian" onchange="document.location.href=this.value">

                            <?php

                            if (isset($_GET['id_persemaian'])) {
                                $id_persemaian = $_GET['id_persemaian'];
                            }

                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT * FROM `persemaian`");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="test_permohonan.php?id_persemaian=<?php echo $row["id_persemaian"]; ?>" <?php if ($_GET['id_persemaian'] == $row["id_persemaian"]) echo 'selected="selected"'; ?>><?php echo $row["kecamatan_persemaian"]; ?></option>
                            <?php $no++;
                            } ?>
                        </select>
                    </label>

                    <div class="rows form_card jenis_bibit">

                        <!--pilih bibit-->
                        <label>Jenis Bibit:
                            <select id="jenis_bibit" name="jenis_bibit" onchange="getJenis(event)">
                                <option value="" disabled selected>-- Pilih Bibit --</option>
                                <?php

                                if (isset($_GET['id_persemaian'])) {
                                    $id_persemaian = $_GET['id_persemaian'];
                                }

                                $sql = mysqli_query($conn, "SELECT * FROM `persediaan` WHERE `id_persemaian` = $id_persemaian ORDER BY 'tipe_bibit'");
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo $row["nama_bibit"]; ?>|<?php echo $row["jumlah_persediaan"]; ?>"><?php echo $row["nama_bibit"]; ?></option>
                                <?php
                                } ?>

                            </select>
                        </label>

                        <label id="jumlah_permohonan_label">Jumlah Permohonan: <input type="number" id="jumlah_permohonan" name="jumlah_permohonan" placeholder="Masukan Jumlah Bibit" min="1" max="10000" /></label>
                        <label id="ketersediaan_label">Jumlah Ketersediaan: <input type="number" id="ketersediaan" disabled name="ketersediaan" value="" /></label>
                    </div>
                    <button type="button" name="tambah" id="tambah" class="tambah">Tambah Jenis</button>

                    <label id="jumlah_bibit_label">Jumlah Bibit: <input type="number" id="jumlah_bibit" disabled name="jumlah_bibit" /></label>



                    <label id="nama_label" class="form_card">Nama Perorangan/Kelompok: <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required /></label>
                    <input type="submit" id="submit" name="submit" value="Lakukan Permohonan" class="btn_menu submit" />

                    <?php

                    //Memasukan Pendaftaran
                    if (isset($_POST['submit'])) {
                        if (empty($_SESSION['id_user'])) {
                            $id_user = "26";
                        } else {
                            $id_user = $_SESSION['id_user'];
                        }


                        $tipe_pemohon = $_POST['tipe_pemohon'];
                        $nama = $_POST['nama'];
                        $no_telp = $_POST['no_telp'];
                        $jumlah_anggota = $_POST['jumlah_anggota'];
                        $ktp = $_POST['ktp'];

                        $nama_lokasi = $_POST['nama_lokasi'];
                        $nama_desa = $_POST['nama_desa'];
                        $nama_kecamatan = $_POST['nama_kecamatan'];
                        $nama_kabupaten = $_POST['nama_kabupaten'];
                        $nama = $_POST['nama'];
                        $luas_penanaman = $_POST['luas_penanaman'];
                        $jumlah_bibit = $_POST['jumlah_bibit'];

                        $query = "INSERT INTO `permohonan` (`id_permohonan`, `id_user`, `jumlah_bibit`, `tgl_dibuat`, `tgl_selesai`, 
                        `status_permohonan`, `tipe_pemohon`, `nama_pemohon`, `jumlah_anggota`, `nama_dusun`, `nama_kecamatan`, 
                        `nama_kota`, `luas_penanaman`, `keterangan`, `peta_lokasi`, `ktp_pemohon`) 
                        VALUES (NULL, '26', '200', '2022-12-12', '',
                         'Menunggu', 'perorangan', 'Wayne W', '1', 'Kebun Kesadaran', 'Talawaan', 
                         'Minahasa Utara', '2', 'Kebun keluarga besar', 'data/peta/test.png', 'data/ktp/test.png')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            $berhasil = "Permohonan Berhasil Dibuat";
                            echo "<script type='text/javascript'>
                                alert('$berhasil');
                            </script>";
                        } else {
                            echo "<script>alert('Gagal')</script>";
                        }
                    }
                    ?>

                </fieldset>
            </form>

        </div>

    </main>

    <?php
    include 'footer.php';
    ?>


    <script>
        function getJenis(e) {
            var str = e.target.value
            var str_array = str.split("|")

            document.getElementById("nama").value = str_array[0]
            document.getElementById("ketersediaan").value = str_array[1]

            jumlah_permohonan.setAttribute("max",str_array[1]);
        }
    </script>

</body>

</html>