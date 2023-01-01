<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengolahan_bibit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


$date = date("Y-m-d");

$tipe_pemohon = $_POST['tipe_pemohon'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$jumlah_anggota = $_POST['jumlah_anggota'];
//$ktp = $_POST['ktp'];

$nama_lokasi = $_POST['nama_lokasi'];
$nama_desa = $_POST['nama_desa'];
$nama_kecamatan = $_POST['nama_kecamatan'];
$nama_kabupaten = $_POST['nama_kabupaten'];
$luas = $_POST['luas'];
$jumlah_bibit = $_POST['jumlah_bibit'];
$keterangan = htmlspecialchars($_POST['keterangan']);

//upload ktp
$img_name = $_FILES['ktp']['name'];
$img_size = $_FILES['ktp']['size'];
$tmp_name = $_FILES['ktp']['tmp_name'];
$error    = $_FILES['ktp']['error'];

$ext = pathinfo($_FILES['ktp']['name'], PATHINFO_EXTENSION);

debug_to_console($nama_desa);

$uploads_dir = "data\ktp";

$new_img_name = uniqid("IMG-", true).'.'.$ext;
move_uploaded_file($tmp_name, "$uploads_dir/$new_img_name");
$ktp = "data/ktp/$new_img_name";

//upload peta
$img_name = $_FILES['peta']['name'];
$img_size = $_FILES['peta']['size'];
$tmp_name = $_FILES['peta']['tmp_name'];
$error    = $_FILES['peta']['error'];

$ext = pathinfo($_FILES['peta']['name'], PATHINFO_EXTENSION);

debug_to_console($img_name);

$uploads_dir = "data\peta";

$new_img_name = uniqid("IMG-", true).'.'.$ext;
move_uploaded_file($tmp_name, "$uploads_dir/$new_img_name");
$peta = "data/peta/$new_img_name";

//query insert permohonan ke database
$query = "INSERT INTO `permohonan` (`id_permohonan`, `id_user`, `jumlah_bibit`, `tgl_dibuat`, `tgl_selesai`, 
                        `status_permohonan`, `tipe_pemohon`, `nama_pemohon`, `jumlah_anggota`, `nama_dusun`, `nama_desa`, `nama_kecamatan`, 
                        `nama_kota`, `luas_penanaman`, `keterangan`, `peta_lokasi`, `ktp_pemohon`) 
                        VALUES (NULL, '26', '$jumlah_bibit', '$date', '',
                         'Menunggu', '$tipe_pemohon', '$nama', '$jumlah_anggota', '$nama_lokasi', '$nama_desa', '$nama_kecamatan', 
                         '$nama_kabupaten', '$luas', '$keterangan', '$peta', '$ktp')";

$result = mysqli_query($conn, $query);
if ($result) {
    $berhasil = "Permohonan Berhasil Dibuat";
    echo "<script type='text/javascript'>
        alert('$berhasil');
    </script>";
} else {
    echo "<script>alert('Gagal')</script>";
}

/*
$number = count($_POST["jenis_bibit[]"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 */
