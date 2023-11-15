<?php
include "../../koneksi.php";

$id_menu = $_POST['id_menu'];
$diskon = $_POST['diskon'];
$periode = $_POST['periode'];

$result = mysqli_query($conn, "INSERT INTO tb_diskon(`id_menu`, `diskon`, `periode`) 
VALUES ('$id_menu', '$diskon', '$periode');");

header("Location:../diskon.php");

?>