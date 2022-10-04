<?php
include_once("koneksi.php");
$id= $_POST['id'];
$npm = $_POST['npm'];
$nama= $_POST['nama'];
$jurusan= $_POST['jurusan'];
$alamat= $_POST['alamat'];
$query="UPDATE tb_mahasiswa SET npm='$npm', nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id_mahasiswa=$id";
$hasil=mysqli_query($koneksi, $query);
if ($hasil) {
header('location:index.php');
} else {
echo "Update data gagal";
}
?>