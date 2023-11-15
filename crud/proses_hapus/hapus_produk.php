<?php
include "../../koneksi.php";
$id_menu = $_GET['id_menu'];

mysqli_query($conn,"DELETE FROM tb_menu WHERE id_menu='$id_menu'");

header("Location:../produk.php");

?>