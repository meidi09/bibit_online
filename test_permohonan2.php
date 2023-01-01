<?php
session_start();
include 'config.php';
//debug

if (empty($_GET['id_persemaian'])) {
    header("Location: test_permohonan2.php?id_persemaian=1");
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

    <!--<script src="permohonan.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

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
            <form method="post" id="permohonan_form" name="permohonan_form" enctype="multipart/form-data">
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
                            <select id="jenis_bibit" name="jenis_bibit[]" onchange="getJenis(event)" required>
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

                        <label id="jumlah_permohonan_label">Jumlah Permohonan: <input type="number" id="jumlah_permohonan" name="jumlah_permohonan[]" onblur="jumlah_bibit_total()" placeholder="Masukan Jumlah Bibit" min="1" max="10000" required /></label>
                        <label id="ketersediaan_label">Jumlah Ketersediaan: <input type="number" id="ketersediaan" disabled name="ketersediaan" value="" /></label>
                    </div>
                    <button type="button" name="add" id="add" class="tambah">Tambah Jenis</button>
                    <button type="button" name="remove" id="remove" class="tambah kurang" displa>Kurangi Jenis</button>

                    <label id="jumlah_bibit_label">Jumlah Bibit: <input type="number" id="jumlah_bibit" readonly name="jumlah_bibit" /></label>


                    <Label class="Bold">Data Pemohon</Label>
                    <label class="form_card">Tipe Pemohon:<br>
                        <label><input type="radio" name="tipe_pemohon" value="Perorangan" class="inline" onclick="check(this.value)" required /> Perorangan</label>
                        <label><input type="radio" name="tipe_pemohon" value="Kelompok" class="inline" onclick="check(this.value)" /> Kelompok</label>
                    </label>

                    <label id="nama_label" class="form_card">Nama Perorangan/Kelompok: <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required /></label>
                    <label id="no_label" class="form_card">Nomor Telepon: <input type="text" id="no_telp" name="no_telp" placeholder="Masukan Nomor Telepon" required /></label>

                    <label id="jumlah_anggota_label" class="form_card">Jumlah Anggota: <input type="number" id="jumlah_anggota" name="jumlah_anggota" placeholder="Masukan Jumlah Anggota" min="1" max="10000" readOnly />(Untuk Kelompok)</label>

                    <label id="foto_ktp" class="form_card">KTP/Fotokopi KTP (Format file: jpg, jpeg, png. Max: 8 MB): <input type="file" id="ktp" name="ktp" accept="image/png, image/jpeg, image/jpg" required /></label>

                    <Label class="Bold">Rencana Lokasi Penanaman</Label>
                    <label id="nama_lokasi_label" class="form_card">Dusun/Nama Perkebunan: <input type="text" id="nama_lokasi" name="nama_lokasi" placeholder="Masukan Nama Dusun/Perkebunan" required /></label>
                    <label id="nama_desa_label" class="form_card">Desa/Kelurahan: <input type="text" id="nama_desa" name="nama_desa" placeholder="Masukan Nama Desa/Kelurahan" required /></label>
                    <label id="nama_kecamatan_label" class="form_card">Kecamatan: <input type="text" id="nama_kecamatan" name="nama_kecamatan" placeholder="Masukan Nama Kecamatan" required /></label>
                    <label id="nama_kabupaten" class="form_card">Nama Kebupaten/Kota: <input type="text" id="nama_kabupaten" name="nama_kabupaten" placeholder="Masukan Nama Kabupaten/Kota" required /></label>

                    <label id="luas_penanaman" class="form_card">Luas Penanaman (Ha): <input type="number" id="luas" name="luas" min="0" step="any" placeholder="Masukan Luas Penanaman" required /></label>
                    <label id="peta_lokasi" class="form_card">Peta Lokasi (Bisa Screenshot Dari Maps, format file: jpg, jpeg, png. Max: 8 MB): <input type="file" id="peta" name="peta" accept="image/png, image/jpeg, image/jpg" required /></label>
                    <label>Keterangan:
                        <textarea id="keterangan_lokasi" name="keterangan" rows="3" cols="30" placeholder="Masukan Keterangan Lokasi"></textarea>
                    </label>


                    <input type="submit" id="submit" name="submit" value="Lakukan Permohonan" class="btn_menu submit" />

                </fieldset>
            </form>

        </div>

    </main>

    <?php
    include 'footer.php';
    ?>


    <script>
        //Batas Size Upload
        var uploadField = document.getElementById("ktp");

        uploadField.onchange = function() {
            if (this.files[0].size > 8388608) {
                alert("Size gambar terlalu besar");
                this.value = "";
            };
        };

        var uploadField2 = document.getElementById("peta");

        uploadField2.onchange = function() {
            if (this.files[0].size > 8388608) {
                alert("Size gambar terlalu besar");
                this.value = "";
            };
        };
        //Batas Upload


        function getJenis(e) {
            var str = e.target.value
            var str_array = str.split("|")

            var index = event.target.id;
            index = index.replace('jenis_bibit', '');
            ketersediaan = "ketersediaan" + index;

            document.getElementById(ketersediaan).value = str_array[1]

            //jumlah_permohonan.setAttribute("max", str_array[1]);
            var max = document.getElementById("jumlah_permohonan" + index);
            max.setAttribute("max", str_array[1]); // set a new value;
        }

        function jumlah_bibit_total() {
            var arr = document.getElementsByName('jumlah_permohonan[]');
            var total_bibit = 0;
            for (var i = 0; i < arr.length; i++) {
                if (parseInt(arr[i].value))
                    total_bibit += parseInt(arr[i].value);
            }
            document.getElementById('jumlah_bibit').value = total_bibit;
        }

        function check(tipe_pemohon) {
            if (tipe_pemohon == "Perorangan") {
                document.getElementById("jumlah_anggota").readOnly = true;
                document.getElementById("jumlah_anggota").value = 1;
            } else {
                document.getElementById("jumlah_anggota").readOnly = false;
            }

        }

        var count = 0;
        $(document).ready(function(e) {
            var count = 0;
            $("#add").click(function(e) {
                var clone = $(".rows:eq(0)").clone();
                clone.find(':input').attr('id', function(i, val) {
                    return val + count;
                });
                $(".rows:last").after(clone);
                document.getElementById("ketersediaan" + count).value = "";
                document.getElementById("jumlah_permohonan" + count).value = "";

                if (count == 0) {
                    var remove = document.getElementById("remove");
                    remove.style.display = "inline";
                }

                count++;
            });

            $('#remove').click(function() {
                if (count > 0) {
                    $(".rows:last").remove();
                    count--;
                    if (count == 0) {
                        var remove = document.getElementById("remove");
                        remove.style.display = "none";
                    }
                } else {
                    alert('Tidak Bisa Mengurangi Jenis')
                }

            });

            // $('#submit').click(function() {
            //     var jumlah_bibit = document.getElementById("jumlah_bibit").value;
            //     if (jumlah_bibit > 25) {
            //         alert('berhasil');

            //         $.ajax({
            //             url: "membuat_permohonan_save.php",
            //             method: "POST",
            //             data: $('#permohonan_form').serialize(),
            //             success: function(data) {
            //                 alert(data);
            //                 $('#permohonan_form').reset();
            //             }
            //         });

            //     }
            //     else {
            //         alert('Bibit yang dimohonkan kurang dari 25. Silahkan datang ke persemaian untuk pengambilan bibit gratis');
            //     }

            // });


            $("form#permohonan_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "membuat_permohonan_save.php",
                    type: "POST",
                    data: formData,
                    success: function(data) {
                        alert(data);
                        location.reload();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>

</body>

</html>