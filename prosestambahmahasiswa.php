<?php
include_once("koneksi.php");
$npm = $_POST['npm'];
$nama= $_POST['nama'];
$jurusan= $_POST['jurusan'];
$alamat= $_POST['alamat'];
$query="INSERT INTO tb_mahasiswa
(npm,nama,jurusan,alamat) VALUE
('$npm','$nama','$jurusan','$alamat')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>