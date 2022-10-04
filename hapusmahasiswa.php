<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_mahasiswa where id_mahasiswa=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}