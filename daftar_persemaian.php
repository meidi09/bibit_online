<?php
include 'config.php';

$sql = "SELECT * from persemaian order by id_persemaian";
$persemaian = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Persemaian</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <main>
        <div class="daftar_top flex_item">
            <h3 class="daftar">Daftar Persemaian</h3>
            <select id="select_persemaian" name="persemaian">
                <option value="KimaAtas">Kima Atas</option>
                <option value="TorautUtara">Toraut Utara</option>
                <option value="LikupangBatuputih">Likupang Batuputih</option>
            </select>
            <form action="membuat_permohonan.php" target="_blank">
                <button class="btn_menu lakukan_permohonan">Lakukan Permohonan Bibit</button>
            </form>

        </div>

        <?php
        while ($row = mysqli_fetch_assoc($persemaian)) {
        ?>
            <div class="daftar_persemaian card">
                <div class="flex_item">
                    <h4><?php echo $row["nama_persemaian"]; ?></h4>
                    <form action="<?php echo $row["lokasi_persemaian"]; ?>" target="_blank">
                        <button class="lihat_map btn_menu" href="daftar_persemaian.php">Lihat di Maps</button>
                    </form>
                </div>
                <div class="map">
                    <img class="gambar_persemaian" src="<?php echo $row["gambar_persemaian"]; ?>" alt="Gambar Persemaian Permanen Kima Atas">
                </div>
            </div>
        
        <?php
        }
        ?>

    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>