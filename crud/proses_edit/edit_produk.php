<?php
include "../../koneksi.php";

$id_menu = $_GET['id_menu'];

$nama_menu = $_POST['nama_menu'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE `tb_menu` SET `nama_menu` = '$nama_menu', `id_kategori` = '$id_kategori', `harga` = '$harga', 
`deskripsi` = '$deskripsi' WHERE `id_menu` = '$id_menu' ");

header("Location:../produk.php");

?>