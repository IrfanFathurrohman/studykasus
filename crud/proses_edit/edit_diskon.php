<?php
include "../../koneksi.php";

$id_diskon = $_GET['id_diskon'];

$id_menu = $_POST['id_menu'];
$diskon = $_POST['diskon'];
$periode = $_POST['periode'];

mysqli_query($conn, "UPDATE `tb_diskon` SET `id_menu` = '$id_menu', `diskon` = '$diskon', `periode` = '$periode' WHERE `id_diskon` = '$id_diskon' ");

header("Location:../diskon.php");

?>  