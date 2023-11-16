<?php
include "../../koneksi.php";

$nama_menu = $_POST['nama_menu'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

$result = mysqli_query($conn, "INSERT INTO tb_menu(`nama_menu`, `id_kategori`, `harga`, `deskripsi`, `gambar`) 
VALUES ('$nama_menu', '$id_kategori', '$harga', '$deskripsi', '$gambar');");

header("Location:../produk.php");

?>