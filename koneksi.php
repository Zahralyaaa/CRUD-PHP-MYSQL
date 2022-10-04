<?php
$host="localhost";
$user="root";
$password="";
$database="dbmahasiswa";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);
?>