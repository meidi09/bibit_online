<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Halaman Utama</title>
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
                        <form action="admin_daftar_permohonan.php">
                            <button class="btn_menu">Ke Halaman Admin</button>
                        </form>

                    </div>
                </div>
            </div>
    </main>

    <?php
    include 'footer.php';
    ?>

</body>

</html>