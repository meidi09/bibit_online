<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Permohonan</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="assets/css/daftar_permohonan.css" />
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <main>
        <div class="daftar_top flex_item">
            <h3 class="daftar">Daftar Permohonan Saya</h3>
            <form action="membuat_permohonan.php" target="_blank">
                <button class="btn_menu lakukan_permohonan">Lakukan Permohonan Bibit</button>
            </form>
        </div>

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
                            <img src="assets/img/circle-arrow-right-solid.svg"/>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>