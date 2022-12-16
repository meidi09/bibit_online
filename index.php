<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <main>
        <div class="index_content">
            <div class="welcome">Selamat Datang di Web<br>BPDASHL Tondano </div>

            <div class="content">
                <div class="menu_buttons">
                    <div class="btn_menu_top">
                        <form action="daftar_persemaian.php">
                            <button class="btn_menu" href="daftar_persemaian.php">Lihat Daftar Persemaian</button>
                        </form>

                        <form action="ketersediaan_bibit.php">
                            <button class="btn_menu btn_2" href="ketersediaan_bibit.php">Lihat Ketersediaan Bibit</button>
                        </form>
                    </div>

                    <div class="btn_menu_down">
                        <form action="membuat_permohonan.php">
                            <button class="btn_menu" href="membuat_permohonan.php">Lakukan Permohonan Bibit</button>
                        </form>
                        <form action="daftar_permohonan.php">
                            <button class="btn_menu btn_2" href="daftar_permohonan.php">Daftar Permohonan Saya</button>
                        </form>                    
                    </div>
                </div>

                <div class="video_tutorial card">
                    <div class="txt_tutorial">
                        <label>Cara Pengisian Permohonan</label>
                    </div>
                    <iframe class="video" width="480" height="270" src="https://www.youtube.com/embed/8jDR5MaPYLc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>
    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>