<?php
include "../../koneksi.php";
$id_diskon = $_GET['id_diskon'];

mysqli_query($conn,"DELETE FROM tb_diskon WHERE id_diskon='$id_diskon'");

header("Location:../diskon.php");

?>