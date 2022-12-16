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

$date=date("Y-m-d");

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
                        VALUES (NULL, '26', '$jumlah_bibit', '2022-12-12', '',
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
