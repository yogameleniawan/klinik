<?php
$connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");
$id = $_GET['id'];
$no = "DELETE FROM tindakan WHERE id_tindakan='$id'";
$result = mysqli_query($connect, $no);

header("location:tindakan.php?pesan=hapus");
