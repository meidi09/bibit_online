<?php

if(empty($_GET['id_persemaian'])) {
    header("Location: ketersediaan_bibit.php?id_persemaian=1");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Ketersediaan Bibit</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <main>
        <div class="daftar_top flex_item">
            <h3 class="daftar">Daftar Persemaian</h3>
            <select id="select_persemaian" name="persemaian" onchange="document.location.href=this.value">
                <?php

                if (isset($_GET['id_persemaian'])) {
                    $id_persemaian = $_GET['id_persemaian'];
                }

                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM `persemaian`");
                while ($row = mysqli_fetch_array($sql)) {
                ?>


                    <option value="ketersediaan_bibit.php?id_persemaian=<?php echo $row["id_persemaian"]; ?>" <?php if($_GET['id_persemaian']==$row["id_persemaian"]) echo 'selected="selected"'; ?>
                    ><?php echo $row["kecamatan_persemaian"]; ?></option>
                <?php $no++;
                } ?>

            </select>
            <form action="membuat_permohonan.php" target="_blank">
                <button class="btn_menu lakukan_permohonan">Lakukan Permohonan Bibit</button>
            </form>
        </div>

        <div class="table_box">
            <table class="table" id="tabel_ketersediaan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Bibit</th>
                        <th>Tipe</th>
                        <th>Ketersediaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['id_persemaian'])) {
                        $id_persemaian = $_GET['id_persemaian'];
                    }
                    else{
                        $id_persemaian = 1;
                    }


                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM `persediaan` WHERE `id_persemaian` = $id_persemaian ORDER BY 'tipe_bibit'");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>


                        <tr>
                            <td data-label="No"><?php echo $no; ?></td>
                            <td data-label="Jenis Bibit"><?php echo $row["nama_bibit"]; ?></td>
                            <td data-label="Tipe"><?php echo $row["tipe_bibit"]; ?></td>
                            <td data-label="Ketersediaan"><?php echo $row["jumlah_persediaan"]; ?></td>
                        </tr>

                    <?php $no++;
                    } ?>
                </tbody>

            </table>
        </div>

    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>