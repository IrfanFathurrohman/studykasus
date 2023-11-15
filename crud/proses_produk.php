<?php
include "../koneksi.php";

$nama_menu = $_POST['nama_menu'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$result = mysqli_query($conn, "INSERT INTO tb_menu(`nama_menu`, `id_kategori`, `harga`, `deskripsi`) 
VALUES ('$nama_menu', '$id_kategori', '$harga', '$deskripsi');");

header("Location:produk.php");

?>