<?php
$connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");
$id = $_GET['id'];
$no = "DELETE FROM petugas WHERE id_petugas='$id'";
$result = mysqli_query($connect, $no);

header("location:petugas.php?pesan=hapus");
