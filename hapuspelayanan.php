<?php
$connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");
$id = $_GET['id'];
$no = "DELETE FROM pelayanan WHERE no_pelayanan='$id'";
$result = mysqli_query($connect, $no);

header("location:pelayanan.php?pesan=hapus");
